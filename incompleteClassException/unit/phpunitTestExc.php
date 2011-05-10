<?php
class TestException extends Exception {}

function doThrow() {
    throw new TestException("BLA");
}
