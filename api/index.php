<?php

// Forward all incoming Vercel serverless requests directly to Laravel's public entrypoint
require __DIR__ . '/../public/index.php';
