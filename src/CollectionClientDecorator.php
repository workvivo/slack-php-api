<?php

/*
 * This file is part of JoliCode's Slack PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Slack;

use JoliCode\Slack\Api\Client;

class CollectionClientDecorator
{
    const CURSOR_PAGINATION = [
        'channelsList' => 'channels',
        'conversationsHistory' => 'messages',
        'conversationsList' => 'channels',
        'conversationsMembers' => 'members',
        'conversationsReplies' => 'messages',
        'filesInfo' => 'comments',
        'groupsList' => 'groups',
        'imList' => 'ims',
        'mpimList' => 'groups',
        'reactionsList' => 'items',
        'starsList' => 'items',
        'usersList' => 'members',
    ];

    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function __call(string $name, array $arguments)
    {
        if (isset(self::CURSOR_PAGINATION[$name])) {
            return $this->iterateOverCursor($name, $arguments);
        }

        throw new \BadMethodCallException('This client decorator should only be used with a collection endpoint');
    }

    private function iterateOverCursor($method, $arguments): \Generator
    {
        $getter = 'get' . self::CURSOR_PAGINATION[$method];

        $arguments[0] = $arguments[0] ?? [];
        $arguments[0]['limit'] = $arguments[0]['limit'] ?? 100;

        $cursor = '';

        do {
            $arguments[0]['cursor'] = $cursor;

            $response = $this->client->{$method}(...$arguments);

            foreach ($response->{$getter}() as $item) {
                yield $item;
            }

            $cursor = $response->getResponseMetadata() ? $response->getResponseMetadata()->getNextCursor() : '';
        } while (!empty($cursor));
    }
}
