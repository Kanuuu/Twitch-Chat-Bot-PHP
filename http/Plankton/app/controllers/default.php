<?php return array(
    '/' => function() {
        // $parameters = $app['request']['parameters'];
        header('Location: /twitchchat');
        return array();
    },
    '/home' => function() {
        // $parameters = $app['request']['parameters'];
        header('Location: /twitchchat');
        return array();
    },
    '/config/administrators' => function($app) {
        return array('botadministrators',
            'title' => 'Bot Administrators - Configuration',
            'route' => 'config_botadministrators',
            'administrators' => $app['model']->get_botadministrators()
        );
    },
    '/config/commands' => function($app) {
        return array('botcommands',
            'title' => 'Bot Commands - Configuration',
            'route' => 'config_botcommands',
            'commands' => $app['model']->get_botcommands()
        );
    },
    '/config/periodicmessages' => function($app) {
        return array('botperiodicmessages',
            'title' => 'Periodic Messages - Configuration',
            'route' => 'config_botperiodicmessages',
            'periodic_messages' => $app['model']->get_botperiodic_msgs()
        );
    },
    '/twitchchat' => function($app) {
        return array('twitchchat',
            'title' => 'Twitch Chat',
            'route' => 'twitchchat',
            'twitch_channel_name' => $app['model']->get_channel_name()
        );
    },
    '/polls_home' => function($app) {
        return array('polls_home',
            'title' => 'Polls',
            'route' => 'polls_home',
            'poll_files' => $app['model']->get_poll_files()
        );
    },
    '/poll_details' => function($app) {

        $parameters = $app['request']['parameters'];
        $poll_filename = isset($parameters['file']) ? $parameters['file'] : NULL;

        return array('poll_details',
            'title' => 'Poll Details',
            'route' => 'poll_details',
            'poll_filename' => $poll_filename,
            'poll_details' => $app['model']->get_poll_file_details($poll_filename)
        );
    },
    '/giveaways_home' => function($app) {
        return array('giveaways_home',
            'title' => 'Giveaways',
            'route' => 'giveaways_home',
            'giveaway_files' => $app['model']->get_giveaway_files()
        );
    },
    '/giveaway_details' => function($app) {

        $parameters = $app['request']['parameters'];
        $giveaway_filename = isset($parameters['file']) ? $parameters['file'] : NULL;

        return array('giveaway_details',
            'title' => 'Giveaway Details',
            'route' => 'giveaway_details',
            'giveaway_filename' => $giveaway_filename,
            'giveaway_details' => $app['model']->get_giveaway_file_details($giveaway_filename)
        );
    },
    '/loyaltypoints' => function($app) {
        return array('Loyalty Points',
            'title' => 'Loyalty Points',
            'route' => 'loyalty_points',
            'loyalty_details' => $app['model']->get_viewers_loyalty_XP_details()
        );
    },
    '/help' => function($app) {
        return array('help',
            'title' => 'Help',
            'route' => 'help'
        );
    },
    '/error' => function() {
        header("HTTP/1.0 404 Not Found");
        header("Status: 404 Not Found");
        return array('error');
    },
);
