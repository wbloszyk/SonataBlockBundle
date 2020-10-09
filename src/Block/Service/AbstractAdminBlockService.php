<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\BlockBundle\Block\Service;

use Sonata\AdminBundle\Form\FormMapper as AdminFormMapper;
use Sonata\BlockBundle\Form\Mapper\FormMapper;
use Sonata\BlockBundle\Meta\Metadata;
use Sonata\BlockBundle\Meta\MetadataInterface;
use Sonata\BlockBundle\Model\BlockInterface;
use Sonata\Form\Validator\ErrorElement;

@trigger_error(
    'The '.__NAMESPACE__.'\AbstractAdminBlockService class is deprecated since sonata-project/block-bundle 3.16 '.
    'and will be removed with the 5.0 release.',
    E_USER_DEPRECATED
);

/**
 * @author Christian Gripp <mail@core23.de>
 *
 * @deprecated since sonata-project/block-bundle 3.16 without any replacement
 *
 * @internal
 */
abstract class AbstractAdminBlockService extends AbstractBlockService implements BlockServiceInterface, EditableBlockService
{
    public function buildCreateForm(AdminFormMapper $formMapper, BlockInterface $block)
    {
        $this->buildEditForm($formMapper, $block);
    }

    public function prePersist(BlockInterface $block)
    {
    }

    public function postPersist(BlockInterface $block)
    {
    }

    public function preUpdate(BlockInterface $block)
    {
    }

    public function postUpdate(BlockInterface $block)
    {
    }

    public function preRemove(BlockInterface $block)
    {
    }

    public function postRemove(BlockInterface $block)
    {
    }

    public function buildEditForm(AdminFormMapper $form, BlockInterface $block)
    {
    }

    public function validateBlock(ErrorElement $errorElement, BlockInterface $block)
    {
    }

    public function getBlockMetadata($code = null)
    {
        return new Metadata(
            self::class,
            (null !== $code ? $code : self::class),
            null,
            'SonataBlockBundle',
            ['class' => 'fa fa-file']
        );
    }

    public function configureEditForm(FormMapper $form, BlockInterface $block): void
    {
    }

    public function configureCreateForm(FormMapper $form, BlockInterface $block): void
    {
    }

    public function validate(ErrorElement $errorElement, BlockInterface $block): void
    {
        $this->validateBlock($errorElement, $block);
    }

    public function getMetadata(): MetadataInterface
    {
        return $this->getBlockMetadata();
    }
}
