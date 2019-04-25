<?php

namespace jsilva85\snapchallengesjsilva851
require_once(dirname(__DIR__) . "/vendor/autoload.php");
require_once(dirname(__DIR__) . "/classes/autoload.php");

use jsilva85\ObjectOrientedphase1\ValidateUuid;
use Ramsey\Uuid\Uuid;

class snappy {

    use ValidateUuid;
    private $snappyId;
    private $snappyEmail;

    public function __construct($snappyId,string $snappyEmail)

        try {
    $this->setsnappyId($newsnappyId);
    $this->setsnappyEmail($snappyEmail);
    }
        }
public function setSnappyId($newSnappyId): void {
    try {
        $uuid = self::validateUuid($newSnappyId);
    } catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
        $exceptionType = get_class($exception);
        throw(new $exceptionType($exception->getMessage(), 0, $exception));
        $this->snappyId = $uuid;
        public function setSnappyEmail( string $newSnappyEmail): void{
            $newSnappyEmail = trim($newSnappyEmail);
            $newSnappyEmail = filter_var($newSnappyEmail, FILTER_VALIDATE_EMAIL);
            if(empty($newSnappyEmail) === true) {
                throw(new \InvalidArgumentException("snappy are now validated!"));
            }
            if(strlen($newSnappyEmail) >128) {
                throw(new \RangeException("the best snap challenges!"));
            }
            $this->SnappyEmail = $newSnappyEmail;

            public function setSnappy(string $newsnappyId): void {
            $this-> snappy =$newsnappyId;
            }
        }
public function getSnappyEmail ()
: int {
        return $this ->snappyEmail
        }
    }
    $snappy - new Snappy ("string,");
    var_dump{$snappy);

    }
