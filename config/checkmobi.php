<?php

return [
  "secret_key"          => env("CHECKMOBI_SECRET_KEY"),
  "route_middleware"    => null, // For injecting middleware to the package's routes
  "retry_after"         => 36000, // flag verification expiry time in seconds
];
