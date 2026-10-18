<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateAdmin extends Command
{
    protected $signature = 'app:create-admin';

    protected $description = 'Create an administrator account';

    public function handle(): int
    {
        $email = $this->ask('ایمیل مدیر');
        $password = $this->secret('رمز مدیر');

        if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->error('ایمیل معتبر نیست.');

            return self::FAILURE;
        }

        if (strlen($password) < 8) {
            $this->error('رمز عبور باید حداقل ۸ کاراکتر باشد.');

            return self::FAILURE;
        }

        if (User::where('email', $email)->exists()) {
            $this->error('این ایمیل قبلاً ثبت شده است.');

            return self::FAILURE;
        }

        $user = new User();
        $user->name = 'مدیر سایت';
        $user->email = $email;
        $user->password = Hash::make($password);
        $user->is_admin = true;
        $user->save();

        $this->info('حساب مدیر با موفقیت ساخته شد.');

        return self::SUCCESS;
    }
}
