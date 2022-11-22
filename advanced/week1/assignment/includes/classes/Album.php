<?php

/**
 * Class Album
 */
class Album
{
    /**
     * Initialize object
     *
     * @param string $name
     * @param string $artist
     * @param string $genre
     * @param string $year
     * @param int $tracks
     */
    public function __construct(
        public string $name,
        public string $artist,
        public string $genre,
        public string $year,
        public int $tracks
    ) {
    }
} 
