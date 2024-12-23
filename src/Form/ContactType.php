<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * Custom type for the contact form.
 */
class ContactType extends AbstractType
{
    private ValidatorInterface $validatorService;

    public function __construct(ValidatorInterface $validatorService)
    {
        $this->validatorService = $validatorService;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $emailPattern = '[a-zA-Z0-9.!#$%&\'*+\\\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)+';

        // Retreive the html regex pattern from the constraint on Contact::$phone
        $phoneConstraintPattern = $this->validatorService
            ->getMetadataFor(Contact::class)
            ->getPropertyMetaData('phone')[0]
            ->getConstraints()[0]
            ->getHtmlPattern()
        ;

        $builder
            ->add('firstName')
            ->add('lastName')
            ->add('email', EmailType::class, [
                'attr' => [
                    'pattern' => $emailPattern,
                ],
            ])
            ->add('phone', TelType::class, [
                'required' => false,
                'attr' => [
                    'pattern' => $phoneConstraintPattern,
                ],
            ])
            ->add('message', TextareaType::class)

            // This is the honeypot field
            ->add('email_address', EmailType::class, [
                'mapped' => false,
                'required' => false,
                'label' => 'Adresse e-mail',
                'attr' => [
                    'tabindex' => '-1',
                    'autocomplete' => 'off',
                ],
                'row_attr' => [
                    'class' => 'contact-email-address',
                    'aria-hidden' => 'true',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
            'csrf_message' => 'Le jeton CSRF n\'est pas valable. Merci d\'envoyer à nouveau le formulaire.',
        ]);
    }
}
