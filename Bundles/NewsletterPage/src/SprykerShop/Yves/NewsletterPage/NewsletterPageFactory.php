<?php

/**
 * This file is part of the Spryker Demoshop.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerShop\Yves\NewsletterPage;

use SprykerShop\Yves\NewsletterPage\Form\NewsletterSubscriptionForm;
use Spryker\Shared\Application\ApplicationConstants;
use Spryker\Yves\Kernel\AbstractFactory;

class NewsletterPageFactory extends AbstractFactory
{
    /**
     * @return \Symfony\Component\Form\FormInterface
     */
    public function getNewsletterSubscriptionForm()
    {
        return $this->getProvidedDependency(ApplicationConstants::FORM_FACTORY)
            ->create($this->createNewsletterSubscriptionFormType());
    }

    /**
     * @return \Symfony\Component\Form\AbstractType
     */
    protected function createNewsletterSubscriptionFormType()
    {
        return new NewsletterSubscriptionForm();
    }
}