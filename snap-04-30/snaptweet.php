class Tweet implements \JsonSerializable {
use ValidateDate;
use ValidateUuid;
/** set getTweetByTweetDate as private..

private $tweetId;
private $tweetProfileId;
private $tweetContent;
private $tweetDate;
private $getTweetsByTweetDate;

/** make a method to access the public function**/


public function __construct($newTweetId, $newTweetProfileId, string $newTweetContent, $newTweetDate = null) {
try {
$this->setTweetId($newTweetId);
$this->setTweetProfileId($newTweetProfileId);
$this->setTweetContent($newTweetContent);
$this->setTweetDate($newTweetDate);
}
catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
$exceptionType = get_class($exception);
throw(new $exceptionType($exception->getMessage(), 0, $exception));
}
}
public function getTweetDate() : \DateTime {
return($this->tweetDate);

public function setTweetDate($newTweetDate = null) : void {
// base case: if the date is null, use the current date and time
if($newTweetDate === null) {
$this->tweetDate = new \DateTime();
return;
}
$newTweetDate = self::validateDateTime($newTweetDate);
} catch(\InvalidArgumentException | \RangeException $exception) {
$exceptionType = get_class($exception);
throw(new $exceptionType($exception->getMessage(), 0, $exception));
}
$this->tweetDate = $newTweetDate;
}
/**Using the Tweet.php class found on the Object Oriented PHP page, write and document a getTweetsByTweetDate method that takes a DateTime object as a parameter and returns an array of all Tweets on that date.**/

$query = "INSERT INTO tweet(tweetId,tweetProfileId, tweetContent, tweetDate) VALUES(:tweetId, :tweetProfileId, :tweetContent, :tweetDate)";
$statement = $pdo->prepare($query);

$formattedDate = $this->tweetDate->format("Y-m-d H:i:s.u");
$parameters = ["tweetId" => $this->tweetId->getBytes(), "tweetProfileId" => $this->tweetProfileId->getBytes(), "tweetContent" => $this->tweetContent, "tweetDate" => $formattedDate];
$statement->execute($parameters);
}

/** snap challenge answer  **/
$parameters = ["tweetId" => $this->tweetId->getBytes (), "" =>$this ->tweetProfileId->getBytes (), "" => $this->tweetContent, "tweetDate" => $formattedDate];

