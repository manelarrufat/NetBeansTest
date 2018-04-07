<?php

namespace Drupal\forcontu_entities\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Message entities.
 *
 * @ingroup forcontu_entities
 */
interface MessageInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Message type.
   *
   * @return string
   *   Type of the Message.
   */
  public function getType();

  /**
   * Gets the Message subject.
   *
   * @return string
   *   Subject of the Message.
   */
  public function getSubject();  
  
  /**
   * Sets the Message subject.
   *
   * @param string $subject
   *   The Message subject.
   *
   * @return \Drupal\forcontu_entities\Entity\MessageInterface
   *   The called Message entity.
   */
  public function setSubject($subject);
  
  /**
   * Gets the Message creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Message.
   */
  public function getCreatedTime();

  /**
   * Sets the Message creation timestamp.
   *
   * @param int $timestamp
   *   The Message creation timestamp.
   *
   * @return \Drupal\forcontu_entities\Entity\MessageInterface
   *   The called Message entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Message published status indicator.
   *
   * Unpublished Message are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Message is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Message.
   *
   * @param bool $published
   *   TRUE to set this Message to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\forcontu_entities\Entity\MessageInterface
   *   The called Message entity.
   */
  public function setPublished($published);
  
  /**
   * Gets the To user id.
   *
   * @return int
   *   The user id.
   */
  public function getUserToId();  
  
  /**
   * Sets the To user id.
   *
   * @param int $uid
   *   The user id.
   *
   * @return $this
   */
  public function setUserToId($uid);
  
  /**
   * Gets the To user object.
   *
   * @return UserInterface
   *   The user object.
   */
  public function getUserTo();  
  
  /**
   * Sets the To user object.
   *
   * @param string $account
   *   The user object.
   *
   * @return $this
   */
  public function setUserTo(UserInterface $account);
  
  /**
   * Gets the content.
   * 
   * @return string 
   *   Message content
   */
  public function getContent();
  
  /**
   * Sets the content's message
   * 
   * @param string $content
   *   The message content
   * 
   * @return $this
   */
  public function setContent($content);
  
  /**
   * Returns the message read indicator
   * 
   * @return bool
   */
  public function isRead();
  
  /**
   * Sets the message read indicator
   * 
   * @param bool $read
   *   TRUE to set this message is read
   * 
   * @return $this
   */
  public function setRead($read);

}
