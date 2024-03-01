<?php

namespace Webmasterskaya\TelegramBotCommands\Commands\UserCommands;

use Longman\TelegramBot\Commands\UserCommand;
use Longman\TelegramBot\Entities\ServerResponse;

class CleanContextCommand extends UserCommand
{
    protected $name = 'clean';

    protected $description = 'add watermark';

    protected $usage = '/clean';

    protected $version = '1.0.0';

    protected $private_only = true;

    public function execute(): ServerResponse
    {
        // TODO: Implement execute() method.
    }
}