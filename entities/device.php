<?php
    class Device{
        var $name;
        var $operatingSystem;
        var $branch;
        var $staff;
        var $hdd;
        var $memory;
        var $architecture;
        var $status;
        var $domain;
        var $memoryType;
        var $deviceType;

        



        /**
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of operatingSystem
         */ 
        public function getOperatingSystem()
        {
                return $this->operatingSystem;
        }

        /**
         * Set the value of operatingSystem
         *
         * @return  self
         */ 
        public function setOperatingSystem($operatingSystem)
        {
                $this->operatingSystem = $operatingSystem;

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
         * Get the value of staff
         */ 
        public function getStaff()
        {
                return $this->staff;
        }

        /**
         * Set the value of staff
         *
         * @return  self
         */ 
        public function setStaff($staff)
        {
                $this->staff = $staff;

                return $this;
        }

        /**
         * Get the value of hdd
         */ 
        public function getHdd()
        {
                return $this->hdd;
        }

        /**
         * Set the value of hdd
         *
         * @return  self
         */ 
        public function setHdd($hdd)
        {
                $this->hdd = $hdd;

                return $this;
        }

        /**
         * Get the value of memory
         */ 
        public function getMemory()
        {
                return $this->memory;
        }

        /**
         * Set the value of memory
         *
         * @return  self
         */ 
        public function setMemory($memory)
        {
                $this->memory = $memory;

                return $this;
        }

        /**
         * Get the value of architecture
         */ 
        public function getArchitecture()
        {
                return $this->architecture;
        }

        /**
         * Set the value of architecture
         *
         * @return  self
         */ 
        public function setArchitecture($architecture)
        {
                $this->architecture = $architecture;

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
         * Get the value of domain
         */ 
        public function getDomain()
        {
                return $this->domain;
        }

        /**
         * Set the value of domain
         *
         * @return  self
         */ 
        public function setDomain($domain)
        {
                $this->domain = $domain;

                return $this;
        }

        /**
         * Get the value of memoryType
         */ 
        public function getMemoryType()
        {
                return $this->memoryType;
        }

        /**
         * Set the value of memoryType
         *
         * @return  self
         */ 
        public function setMemoryType($memoryType)
        {
                $this->memoryType = $memoryType;

                return $this;
        }

        /**
         * Get the value of deviceType
         */ 
        public function getDeviceType()
        {
                return $this->deviceType;
        }

        /**
         * Set the value of deviceType
         *
         * @return  self
         */ 
        public function setDeviceType($deviceType)
        {
                $this->deviceType = $deviceType;

                return $this;
        }
    }


?>