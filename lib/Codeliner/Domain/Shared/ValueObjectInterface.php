<?php
/*
 * This file is part of the codeliner/shared-domain-set package.
 * (c) Alexander Miertsch <kontakt@codeliner.ws>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Codeliner\Domain\Shared;

/**
 * Interface ValueObjectInterface
 * 
 * @author Alexander Miertsch <kontakt@codeliner.ws>
 */
interface ValueObjectInterface
{
    /**
     * @param ValueObjectInterface $other
     * @return boolean
     */
    public function sameValueAs(ValueObjectInterface $other);
}
