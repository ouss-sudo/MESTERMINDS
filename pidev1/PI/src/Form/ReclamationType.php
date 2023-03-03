<?php

namespace App\Form;

use App\Entity\Reclamation;
use MeteoConcept\HCaptchaBundle\Form\HCaptchaType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('objet', null,['label'=>false,'attr'=>['placeholder'=>'Objet']])
            ->add('description',TextareaType::class,['label'=>false,'attr'=>['placeholder'=>'Description']])
         //  ->add('captcha', HCaptchaType::class, [
           //     'label' => 'Anti-bot test',
              //   optionally: use a different site key than the default one:
             //   'hcaptcha_site_key' => 'f29d0165-cf85-45e8-a1af-e55019e3fba8',
          // ])
       ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}