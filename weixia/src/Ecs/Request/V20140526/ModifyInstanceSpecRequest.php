<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace  Aliyun\Ecs\Request\V20140526;

use Aliyun\Core\RpcAcsRequest;

class ModifyInstanceSpecRequest extends RpcAcsRequest
{
    public function __construct()
    {
        parent::__construct("Ecs", "2014-05-26", "ModifyInstanceSpec");
    }

    private $ownerId;

    private $resourceOwnerAccount;

    private $resourceOwnerId;

    private $instanceId;

    private $instanceType;

    private $internetMaxBandwidthOut;

    private $internetMaxBandwidthIn;

    private $ownerAccount;

    public function getOwnerId()
    {
        return $this->ownerId;
    }

    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;
        $this->queryParameters["OwnerId"] = $ownerId;
    }

    public function getResourceOwnerAccount()
    {
        return $this->resourceOwnerAccount;
    }

    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->resourceOwnerAccount = $resourceOwnerAccount;
        $this->queryParameters["ResourceOwnerAccount"] = $resourceOwnerAccount;
    }

    public function getResourceOwnerId()
    {
        return $this->resourceOwnerId;
    }

    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->resourceOwnerId = $resourceOwnerId;
        $this->queryParameters["ResourceOwnerId"] = $resourceOwnerId;
    }

    public function getInstanceId()
    {
        return $this->instanceId;
    }

    public function setInstanceId($instanceId)
    {
        $this->instanceId = $instanceId;
        $this->queryParameters["InstanceId"] = $instanceId;
    }

    public function getInstanceType()
    {
        return $this->instanceType;
    }

    public function setInstanceType($instanceType)
    {
        $this->instanceType = $instanceType;
        $this->queryParameters["InstanceType"] = $instanceType;
    }

    public function getInternetMaxBandwidthOut()
    {
        return $this->internetMaxBandwidthOut;
    }

    public function setInternetMaxBandwidthOut($internetMaxBandwidthOut)
    {
        $this->internetMaxBandwidthOut = $internetMaxBandwidthOut;
        $this->queryParameters["InternetMaxBandwidthOut"] = $internetMaxBandwidthOut;
    }

    public function getInternetMaxBandwidthIn()
    {
        return $this->internetMaxBandwidthIn;
    }

    public function setInternetMaxBandwidthIn($internetMaxBandwidthIn)
    {
        $this->internetMaxBandwidthIn = $internetMaxBandwidthIn;
        $this->queryParameters["InternetMaxBandwidthIn"] = $internetMaxBandwidthIn;
    }

    public function getOwnerAccount()
    {
        return $this->ownerAccount;
    }

    public function setOwnerAccount($ownerAccount)
    {
        $this->ownerAccount = $ownerAccount;
        $this->queryParameters["OwnerAccount"] = $ownerAccount;
    }
}