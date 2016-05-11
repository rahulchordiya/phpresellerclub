<?php

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-10-01 at 00:58:42.
 */
class ContactTest extends PHPUnit_Framework_TestCase {

  /**
   * @var Contact
   */
  protected $object;

  /**
   * Sets up the fixture, for example, opens a network connection.
   * This method is called before a test is executed.
   */
  protected function setUp() {
    $mock = $this->getMock('Contact', array('callApi'));
    $mock->method('callApi')->willReturn('foo');
    $this->object = $mock;
  }

  /**
   * Tears down the fixture, for example, closes a network connection.
   * This method is called after a test is executed.
   */
  protected function tearDown() {
    
  }

  /**
   * @covers Contact::createContact
   */
  public function testCreateContactCorrect() {
    $contactDetails = array(
      'name' => 'Anish Sheela',
      'company' => 'N/A',
      'email' => 'anishsheela@outlook.com',
      'address-line-1' => '221B Baker St.',
      'city' => 'London',
      'country' => 'IN',
      'zipcode' => '635426',
      'phone-cc' => '91',
      'phone' => '9876543210',
      'customer-id' => '13560700',
      'type' => 'Contact',
    );
    $apiOut = $this->object->createContact($contactDetails);
  }

  /**
   * @covers Contact::deleteContact
   */
  public function testDeleteContact() {
    $customerId = '46968270';
    $apiOut = $this->object->deleteContact($customerId);
  }

  /**
   * @covers Contact::editContact
   */
  public function testEditContact() {
    $customerId = '46968270';
    $contactDetails = array(
      'name' => 'Anish S',
      'company' => 'N/A',
      'email' => 'anishsheela@outlook.com',
      'address-line-1' => '221B Baker St.',
      'city' => 'London',
      'country' => 'IN',
      'zipcode' => '635426',
      'phone-cc' => '91',
      'phone' => '9876543210',
      'customer-id' => '13560700',
      'type' => 'Contact',
    );
    $apiOut = $this->object->editContact($customerId, $contactDetails);
  }

  /**
   * @covers Contact::getContact
   */
  public function testGetContact() {
    $customerId = '46983302';
    $apiOut = $this->object->getContact($customerId);
  }

  /**
   * @covers Contact::searchContact
   */
  public function testSearchContact() {
    $customerId = '46983302';
    $contactDetails = array();
    $apiOut = $this->object->searchContact($customerId, $contactDetails);
  }

}
