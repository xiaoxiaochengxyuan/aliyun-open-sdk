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
namespace Aliyun\Ecs\Request\V20140526;

use Aliyun\Core\RpcAcsRequest;

class CreateVpcRequest extends RpcAcsRequest
{
    public function __construct()
    {
        parent::__construct("Ecs", "2014-05-26", "CreateVpc");
    }

    private $ownerId;

    private $resourceOwnerAccount;

    private $resourceOwnerId;

    private $cidrBlock;

    private $vpcName;

    private $description;

    private $clientToken;

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

    public function getCidrBlock()
    {
        return $this->cidrBlock;
    }

    public function setCidrBlock($cidrBlock)
    {
        $this->cidrBlock = $cidrBlock;
        $this->queryParameters["CidrBlock"] = $cidrBlock;
    }

    public function getVpcName()
    {
        return $this->vpcName;
    }

    public function setVpcName($vpcName)
    {
        $this->vpcName = $vpcName;
        $this->queryParameters["VpcName"] = $vpcName;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        $this->queryParameters["Description"] = $description;
    }

    public function getClientToken()
    {
        return $this->clientToken;
    }

    public function setClientToken($clientToken)
    {
        $this->clientToken = $clientToken;
        $this->queryParameters["ClientToken"] = $clientToken;
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