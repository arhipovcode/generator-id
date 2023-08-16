<?php
declare(strict_types=1);

namespace MikhailArkhipov\PhpGeneratorId;

class GeneratorId
{

    /**
     * @param int $idLength
     * @return string
     */
    public function generate(int $idLength = 8): string
    {
        $id = '';
        $symbols = 'abcdefghi0123456tuvGHIzABCD^&EFJKLMNw*()xyOPQRSTUVWXYZ78jklmnopqrs9!@#$%_+-=';
        for ($i = 0; $i < $idLength; $i++) {
            $id .= $symbols[rand(0, $idLength - 1)];
            if(($i + 1) % 4 === 0 && $i !== $idLength - 1) {
                $id .= '-';
            }
        }

        return $id;
    }
}
