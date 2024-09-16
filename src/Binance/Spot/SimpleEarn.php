<?php

namespace Binance\Spot;

use Binance\Util\Strings;
use Binance\Exception\MissingArgumentException;

trait SimpleEarn
{
    /**
     * Request for flexible Reward Record (USER_DATA)
     *
     * GET /sapi/v1/simple-earn/flexible/history/rewardsRecord
     *
     * Weight(IP): 5
     *
     * @param string $type
     * @param array $options
     *
     * @return array|mixed
     * @throws MissingArgumentException
     */
    public function flexibleRewardsRecord(string $type, array $options = [])
    {
        if (Strings::isEmpty($type)) {
            throw new MissingArgumentException('type');
        }

        return $this->signRequest('GET', '/sapi/v1/simple-earn/flexible/history/rewardsRecord', array_merge(
            $options,
            [
                'type' => $type,
            ]
        ));
    }

}
