<?php

declare(strict_types=1);

use Random\RandomException;

if (!function_exists('guidV4')) {
    /**
     * Generate a UUID version 4.
     *
     * @param  non-empty-string|null  $data Optional 16 bytes of random data.
     * @return non-empty-string 36 character UUID.
     * @throws RandomException
     */
    function guidV4(?string $data = null): string {
        // Generate 16 bytes (128 bits) of random data or use the data passed into the function.
        $data = $data ?? random_bytes(16);
        assert(strlen($data) === 16);

        // Set version to 0100
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        // Set bits 6-7 to 10
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

        // Output the 36 character UUID.
        /** @phpstan-ignore return.type */
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }
}
