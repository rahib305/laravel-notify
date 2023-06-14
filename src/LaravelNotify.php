<?php

namespace Rahib305\LaravelNotify;

use Mail;
class LaravelNotify {
    public function mail($to, $mail) {
        return Mail::to($to)->queue($mail);
    }
}