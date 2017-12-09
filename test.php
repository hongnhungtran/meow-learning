<?php
/**
 * TODO : Codeto Training PHP
 * @author : SonHA (hason61vn@gmail.com)
 */
class Person {
	private $skills;
	public function __construct($skill) {
		$this->skills = $skill;
	}
	public function totalSkills() {
		return count($this->skills);
	}
}
$skill = array("PHP", "HTML", "CSS", "JavaScript", "Marketing", "SEO");
$p = new Person($skill);
$b = new Person($skill);
echo $p->totalSkills();
echo $b->totalSkills();