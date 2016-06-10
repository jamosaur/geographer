<?php

namespace MenaraSolutions\Geographer;

use MenaraSolutions\Geographer\Collections\MemberCollection;

class Earth extends Divisible
{
    /**
     * @var string
     */
    protected $memberClass = Country::class;

    /**
     * @var null
     */
    protected static $parentClass = null;

    /**
     * @return MemberCollection
     */
    public function getCountries()
    {
        return $this->getMembers();
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return 'Earth';
    }

    /**
     * @return string
     */
    public function getLongName()
    {
        return 'The Blue Marble';
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return 'SOL-III';
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'code' => $this->getCode(),
            'name' => $this->getName()
        ];
    }

    /**
     * @return null
     */
    public function getParentCode()
    {
        return null;
    }

    /**
     * @return MemberCollection
     */
    public function getAfrica()
    {
        return $this->find([
            'continent' => 'AF'
        ]);
    }

    /**
     * @return MemberCollection
     */
    public function getNorthAmerica()
    {
        return $this->find([
            'continent' => 'NA'
        ]);
    }

    /**
     * @return MemberCollection
     */
    public function getSouthAmerica()
    {
        return $this->find([
            'continent' => 'SA'
        ]);
    }

    /**
     * @return MemberCollection
     */
    public function getAsia()
    {
        return $this->find([
            'continent' => 'AS'
        ]);
    }

    /**
     * @return MemberCollection
     */
    public function getEurope()
    {
        return $this->find([
            'continent' => 'EU'
        ]);
    }

    /**
     * @return MemberCollection
     */
    public function getOceania()
    {
        return $this->find([
            'continent' => 'OC'
        ]);
    }
}