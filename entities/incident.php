<?php
class Incident{
    var $name;
    var $reportingStaff;
    var $attendingStaff;
    var $date;
    var $time;
    var $category;
    var $priority;
    var $branch;
    var $status;
    var $action;
    var $fixDate;
    var $fixTime;
    

     
    public function getName()
    {
        return $this->name;
    }

 
    public function setName($name)    {
        $this->name = $name;
    }

    /**
     * Get the value of reportingStaff
     */ 
    public function getReportingStaff()
    {
        return $this->reportingStaff;
    }

    /**
     * Set the value of reportingStaff
     *
     * @return  self
     */ 
    public function setReportingStaff($reportingStaff)
    {
        $this->reportingStaff = $reportingStaff;

        return $this;
    }

    /**
     * Get the value of attendingStaff
     */ 
    public function getAttendingStaff()
    {
        return $this->attendingStaff;
    }

    /**
     * Set the value of attendingStaff
     *
     * @return  self
     */ 
    public function setAttendingStaff($attendingStaff)
    {
        $this->attendingStaff = $attendingStaff;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of time
     */ 
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set the value of time
     *
     * @return  self
     */ 
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get the value of category
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */ 
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get the value of priority
     */ 
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set the value of priority
     *
     * @return  self
     */ 
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get the value of branch
     */ 
    public function getBranch()
    {
        return $this->branch;
    }

    /**
     * Set the value of branch
     *
     * @return  self
     */ 
    public function setBranch($branch)
    {
        $this->branch = $branch;

        return $this;
    }

    

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of action
     */ 
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set the value of action
     *
     * @return  self
     */ 
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get the value of fixDate
     */ 
    public function getFixDate()
    {
        return $this->fixDate;
    }

    /**
     * Set the value of fixDate
     *
     * @return  self
     */ 
    public function setFixDate($fixDate)
    {
        $this->fixDate = $fixDate;

        return $this;
    }

    /**
     * Get the value of fixTime
     */ 
    public function getFixTime()
    {
        return $this->fixTime;
    }

    /**
     * Set the value of fixTime
     *
     * @return  self
     */ 
    public function setFixTime($fixTime)
    {
        $this->fixTime = $fixTime;

        return $this;
    }
}

?>