<?php
/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 19-2-22
 * Time: 下午2:19
 */

class Resume
{
    private $name;

    private $age;

    private $sex;

    /**
     * @var WorkExperience
     */
    private $workExperience;

    public function __construct($name, $age, $sex)
    {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
        $this->workExperience = new WorkExperience();
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @param mixed $sex
     */
    public function setSex($sex): void
    {
        $this->sex = $sex;
    }

    /**
     * @param mixed $workExperience
     */
    public function setWorkExperience($workData, $company): void
    {
        $this->workExperience->setCompany($company);
        $this->workExperience->setWorkData($workData);
    }

    public function display(): void
    {
        printf("%s %s %s\n", $this->name, $this->age, $this->sex);
        printf("工作经历： %s %s \n", $this->workExperience->getWorkData(), $this->workExperience->getCompany());
    }

    /**
     * 实现深复制
     */
    public function __clone()
    {
        $this->workExperience = clone $this->workExperience;
    }
}
