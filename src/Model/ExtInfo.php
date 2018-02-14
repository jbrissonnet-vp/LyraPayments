<?php
namespace ElGigi\SystemPay\model;

/**
 * Class ExtInfo
 *
 * @package SystemPay\Model
 *
 * @property string $key   Variable key
 * @property string $value Variable value
 */
class ExtInfo extends Object
{
    /**
     * ExtInfo constructor.
     *
     * @param array $data Default data
     */
    public function __construct(array $data = [])
    {
        parent::__construct(['key'   => 'string',
                             'value' => 'string'],
                            $data);
    }
}