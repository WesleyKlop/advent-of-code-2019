<?php


namespace App\Solvers\Y2020\Day11;

class Tile
{
    public const TYPE_FLOOR = '.';
    public const TYPE_EMPTY = 'L';
    public const TYPE_OCCUPIED = '#';

    private string $type;

    public function __construct(string $type)
    {
        $this->type = $type;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function flip(): Tile
    {
        switch ($this->type) {
            case self::TYPE_OCCUPIED:
                return new static(self::TYPE_EMPTY);
            case self::TYPE_EMPTY:
                return new static(self::TYPE_OCCUPIED);
        }
        return $this;
    }

    public function isOccupied(): bool
    {
        return $this->type === static::TYPE_OCCUPIED;
    }

    public function equals(Tile $tile): bool
    {
        return $this->type === $tile->type;
    }

    public function isEmpty()
    {
        return $this->type === static::TYPE_EMPTY;
    }
}
