<?php

function extractGoogleDriveId($driveLink)
{
  $patterns = [
    '/\/d\/([a-zA-Z0-9_-]{25,})/',
    '/id=([a-zA-Z0-9_-]{25,})/',
    '/\/file\/d\/([a-zA-Z0-9_-]{25,})/'
  ];

  foreach ($patterns as $pattern) {
    if (preg_match($pattern, $driveLink, $matches)) {
      return $matches[1];
    }
  }

  return null;
}
