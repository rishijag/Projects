<?php
interface MoveInterface
{
	function start();
	function end();
	function setScore();
	function setHealth();
	function isOver();
}