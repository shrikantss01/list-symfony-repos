<?php
require_once 'vendor/autoload.php';
class SymfonyRepos
{
	public function getAllUsersRepos()
    {				
		$client = new \Github\Client();
        return $client->api('user')->repositories('symfony');	
	}
}

$symfonyReposObj = new SymfonyRepos;
$repositories = $symfonyReposObj->getAllUsersRepos();

if (count($repositories) > 0) {
	echo '<ul>';
	foreach ($repositories as $details) {
		echo '<li><a href="'.$details["html_url"].'">'.$details["full_name"].'</a></li>';
	}
	echo '</ul>';
}
