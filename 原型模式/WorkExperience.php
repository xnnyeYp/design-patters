<?php
/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 19-2-22
 * Time: 下午2:23
 */

class WorkExperience
{
    private $workData;

    private $company;

    /**
     * @param mixed $company
     */
    public function setCompany($company): void
    {
        $this->company = $company;
    }

    /**
     * @param mixed $workData
     */
    public function setWorkData($workData): void
    {
        $this->workData = $workData;
    }

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @return mixed
     */
    public function getWorkData()
    {
        return $this->workData;
    }

}
