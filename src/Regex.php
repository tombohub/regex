<?php

namespace Spatie\Regex;

class Regex
{
    public static function match(string $pattern, string $subject): MatchResult
    {
        return MatchResult::for($pattern, $subject);
    }

    public static function matchAll(string $pattern, string $subject): MatchAllResult
    {
        return MatchAllResult::for($pattern, $subject);
    }

    public static function replace($pattern, $replacement, $subject, $limit = -1)
    {
        return ReplaceResult::for($pattern, $replacement, $subject, $limit);
    }
}