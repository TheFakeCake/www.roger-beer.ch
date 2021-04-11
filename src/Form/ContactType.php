<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * Custom type for the contact form.
 */
class ContactType extends AbstractType
{
    /**
     * @var ValidatorInterface
     */
    private ValidatorInterface $validatorService;

    public function __construct(ValidatorInterface $validatorService) {
        $this->validatorService = $validatorService;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
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
            ->add('email', EmailType::class)
            ->add('phone', TelType::class, [
                'required' => false,
                'attr' => [
                    'pattern' => $phoneConstraintPattern,
                ],
            ])
            ->add('message', TextareaType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
            'csrf_message' => 'Le jeton CSRF est incorrect. Vous pouvez essayer d\'envoyer à nouveau le formualaire.',
        ]);
    }
}
