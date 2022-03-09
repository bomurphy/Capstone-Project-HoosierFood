<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\PagespeedInsights;

class LighthouseCategoryV5 extends \Google\Collection
{
  protected $collection_key = 'auditRefs';
  protected $auditRefsType = AuditRefs::class;
  protected $auditRefsDataType = 'array';
  public $description;
  public $id;
  public $manualDescription;
  public $score;
  public $title;

  /**
   * @param AuditRefs[]
   */
  public function setAuditRefs($auditRefs)
  {
    $this->auditRefs = $auditRefs;
  }
  /**
   * @return AuditRefs[]
   */
  public function getAuditRefs()
  {
    return $this->auditRefs;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setManualDescription($manualDescription)
  {
    $this->manualDescription = $manualDescription;
  }
  public function getManualDescription()
  {
    return $this->manualDescription;
  }
  public function setScore($score)
  {
    $this->score = $score;
  }
  public function getScore()
  {
    return $this->score;
  }
  public function setTitle($title)
  {
    $this->title = $title;
  }
  public function getTitle()
  {
    return $this->title;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LighthouseCategoryV5::class, 'Google_Service_PagespeedInsights_LighthouseCategoryV5');
