<?php

namespace App\DataFixtures;

use App\Entity\JobTitle;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class JobTitleFixtures extends Fixture
{
    public const JOB_TITLE_REFERENCE_1 = 'assistant-administratif';
    public const JOB_TITLE_REFERENCE_2 = 'assistant-comptable';
    public const JOB_TITLE_REFERENCE_3 = 'assistant-juridique-droit-des-societes';
    public const JOB_TITLE_REFERENCE_4 = 'assistant-juridique-droit-social';
    public const JOB_TITLE_REFERENCE_5 = 'auditeur-assistant';
    public const JOB_TITLE_REFERENCE_6 = 'autres-metiers';
    public const JOB_TITLE_REFERENCE_7 = 'avocat-droit-des-societes';
    public const JOB_TITLE_REFERENCE_8 = 'avocat-droit-social';
    public const JOB_TITLE_REFERENCE_9 = 'job_title_reference_9';
    public const JOB_TITLE_REFERENCE_10 = 'chef-de-mission-audit';
    public const JOB_TITLE_REFERENCE_11 = 'chef-de-mission-comptable';
    public const JOB_TITLE_REFERENCE_12 = 'collaborateur-comptable';
    public const JOB_TITLE_REFERENCE_13 = 'collaborateur-comptable-et-audit';
    public const JOB_TITLE_REFERENCE_14 = 'communication-marketing';
    public const JOB_TITLE_REFERENCE_15 = 'consultant-junior';
    public const JOB_TITLE_REFERENCE_16 = 'consultant-manager';
    public const JOB_TITLE_REFERENCE_17 = 'consultant-senior';
    public const JOB_TITLE_REFERENCE_18 = 'controleur-de-gestion';
    public const JOB_TITLE_REFERENCE_19 = 'directeur-audit';
    public const JOB_TITLE_REFERENCE_20 = 'expert-comptable';
    public const JOB_TITLE_REFERENCE_21 = 'fiscalite-analyse';
    public const JOB_TITLE_REFERENCE_22 = 'gestion-pilotage';
    public const JOB_TITLE_REFERENCE_23 = 'gestion-de-patrimoine';
    public const JOB_TITLE_REFERENCE_24 = 'gestionnaire-de-paie';
    public const JOB_TITLE_REFERENCE_25 = 'juriste-droit-des-societes';
    public const JOB_TITLE_REFERENCE_26 = 'juriste-droit-social';
    public const JOB_TITLE_REFERENCE_27 = 'manager-audit';
    public const JOB_TITLE_REFERENCE_28 = 'manager-comptable';
    public const JOB_TITLE_REFERENCE_29 = 'numerique-digital';
    public const JOB_TITLE_REFERENCE_30 = 'responsable-paie';
    public const JOB_TITLE_REFERENCE_31 = 'ressources-humaines';
    public const JOB_TITLE_REFERENCE_32 = 'secretaire-juridique';
    public const JOB_TITLE_REFERENCE_33 = 'senior-manager-audit';
    public const JOB_TITLE_REFERENCE_34 = 'transmission/cession';

    public function load(ObjectManager $manager): void
    {
        $jobTitle = new JobTitle();
        $jobTitle->setSlug('assistant-administratif');
        $jobTitle->setLabel('Assistant administratif');
        $this->addReference(self::JOB_TITLE_REFERENCE_1, $jobTitle);
        $manager->persist($jobTitle);

        $jobTitle = new JobTitle();
        $jobTitle->setSlug('assistant-comptable');
        $jobTitle->setLabel('Assistant comptable');
        $this->addReference(self::JOB_TITLE_REFERENCE_2, $jobTitle);
        $manager->persist($jobTitle);

        $jobTitle = new JobTitle();
        $jobTitle->setSlug('assistant-juridique-droit-des-societes');
        $jobTitle->setLabel('Assistant juridique - Droit des Sociétés');
        $this->addReference(self::JOB_TITLE_REFERENCE_3, $jobTitle);
        $manager->persist($jobTitle);

        $jobTitle = new JobTitle();
        $jobTitle->setSlug('assistant-juridique-droit-social');
        $jobTitle->setLabel('Assistant juridique - Droit Social');
        $this->addReference(self::JOB_TITLE_REFERENCE_4, $jobTitle);
        $manager->persist($jobTitle);

        $jobTitle = new JobTitle();
        $jobTitle->setSlug('auditeur-assistant');
        $jobTitle->setLabel('Auditeur Assistant');
        $this->addReference(self::JOB_TITLE_REFERENCE_5, $jobTitle);
        $manager->persist($jobTitle);

        $jobTitle = new JobTitle();
        $jobTitle->setSlug('autres-metiers');
        $jobTitle->setLabel('Autres métiers');
        $this->addReference(self::JOB_TITLE_REFERENCE_6, $jobTitle);
        $manager->persist($jobTitle);

        $jobTitle = new JobTitle();
        $jobTitle->setSlug('avocat-droit-des-societes');
        $jobTitle->setLabel('Avocat - Droit des Sociétés');
        $this->addReference(self::JOB_TITLE_REFERENCE_7, $jobTitle);
        $manager->persist($jobTitle);

        $jobTitle = new JobTitle();
        $jobTitle->setSlug('avocat-droit-social');
        $jobTitle->setLabel('Avocat - Droit Social');
        $this->addReference(self::JOB_TITLE_REFERENCE_8, $jobTitle);
        $manager->persist($jobTitle);

        $jobTitle = new JobTitle();
        $jobTitle->setSlug('chef-de-mission-audit');
        $jobTitle->setLabel('Chef de mission Audit');
        $this->addReference(self::JOB_TITLE_REFERENCE_9, $jobTitle);
        $manager->persist($jobTitle);

        $jobTitle = new JobTitle();
        $jobTitle->setSlug('chef-de-mission-comptable');
        $jobTitle->setLabel('Chef de mission Comptable');
        $this->addReference(self::JOB_TITLE_REFERENCE_10, $jobTitle);
        $manager->persist($jobTitle);

        $jobTitle = new JobTitle();
        $jobTitle->setSlug('collaborateur-comptable');
        $jobTitle->setLabel('Collaborateur Comptable');
        $this->addReference(self::JOB_TITLE_REFERENCE_11, $jobTitle);
        $manager->persist($jobTitle);

        $jobTitle = new JobTitle();
        $jobTitle->setSlug('collaborateur-comptable-et-audit');
        $jobTitle->setLabel('Collaborateur Comptable et Audit');
        $this->addReference(self::JOB_TITLE_REFERENCE_12, $jobTitle);
        $manager->persist($jobTitle);

        $jobTitle = new JobTitle();
        $jobTitle->setSlug('communication-marketing');
        $jobTitle->setLabel('Communication / Marketing');
        $this->addReference(self::JOB_TITLE_REFERENCE_13, $jobTitle);
        $manager->persist($jobTitle);

        $jobTitle = new JobTitle();
        $jobTitle->setSlug('consultant-junior');
        $jobTitle->setLabel('Consultant Junior');
        $this->addReference(self::JOB_TITLE_REFERENCE_14, $jobTitle);
        $manager->persist($jobTitle);

        $jobTitle = new JobTitle();
        $jobTitle->setSlug('consultant-manager');
        $jobTitle->setLabel('Consultant Manager');
        $this->addReference(self::JOB_TITLE_REFERENCE_15, $jobTitle);
        $manager->persist($jobTitle);

        $jobTitle = new JobTitle();
        $jobTitle->setSlug('consultant-senior');
        $jobTitle->setLabel('Consultant Senior');
        $this->addReference(self::JOB_TITLE_REFERENCE_16, $jobTitle);
        $manager->persist($jobTitle);

        $jobTitle = new JobTitle();
        $jobTitle->setSlug('controleur-de-gestion');
        $jobTitle->setLabel('Contrôleur de gestion');
        $this->addReference(self::JOB_TITLE_REFERENCE_17, $jobTitle);
        $manager->persist($jobTitle);

        $jobTitle = new JobTitle();
        $jobTitle->setSlug('directeur-audit');
        $jobTitle->setLabel('Directeur Audit');
        $this->addReference(self::JOB_TITLE_REFERENCE_18, $jobTitle);
        $manager->persist($jobTitle);

        $jobTitle = new JobTitle();
        $jobTitle->setSlug('expert-comptable');
        $jobTitle->setLabel('Expert Comptable');
        $this->addReference(self::JOB_TITLE_REFERENCE_19, $jobTitle);
        $manager->persist($jobTitle);

        $jobTitle = new JobTitle();
        $jobTitle->setSlug('expert-comptable-stagiaire');
        $jobTitle->setLabel('Expert Comptable Stagiaire');
        $this->addReference(self::JOB_TITLE_REFERENCE_20, $jobTitle);
        $manager->persist($jobTitle);

        $jobTitle = new JobTitle();
        $jobTitle->setSlug('fiscalite-analyse');
        $jobTitle->setLabel('Fiscalité Analyse');
        $this->addReference(self::JOB_TITLE_REFERENCE_21, $jobTitle);
        $manager->persist($jobTitle);

        $jobTitle = new JobTitle();
        $jobTitle->setSlug('gestion-pilotage');
        $jobTitle->setLabel('Gestion / Pilotage');
        $this->addReference(self::JOB_TITLE_REFERENCE_22, $jobTitle);
        $manager->persist($jobTitle);

        $jobTitle = new JobTitle();
        $jobTitle->setSlug('gestion de patrimoine');
        $jobTitle->setLabel('Gestion de patrimoine');
        $this->addReference(self::JOB_TITLE_REFERENCE_23, $jobTitle);
        $manager->persist($jobTitle);

        $jobTitle = new JobTitle();
        $jobTitle->setSlug('gestionnaire-de-paie');
        $jobTitle->setLabel('Gestionnaire de paie');
        $this->addReference(self::JOB_TITLE_REFERENCE_24, $jobTitle);
        $manager->persist($jobTitle);

        $jobTitle = new JobTitle();
        $jobTitle->setSlug('juriste-droit-des-societes');
        $jobTitle->setLabel('Juriste - Droit des Sociétés');
        $this->addReference(self::JOB_TITLE_REFERENCE_25, $jobTitle);
        $manager->persist($jobTitle);

        $jobTitle = new JobTitle();
        $jobTitle->setSlug('juriste-droit-social');
        $jobTitle->setLabel('Juriste - Droit Social');
        $this->addReference(self::JOB_TITLE_REFERENCE_26, $jobTitle);
        $manager->persist($jobTitle);

        $jobTitle = new JobTitle();
        $jobTitle->setSlug('manager-audit');
        $jobTitle->setLabel('Manager Audit');
        $this->addReference(self::JOB_TITLE_REFERENCE_27, $jobTitle);
        $manager->persist($jobTitle);

        $jobTitle = new JobTitle();
        $jobTitle->setSlug('manager-comptable');
        $jobTitle->setLabel('Manager Comptable');
        $this->addReference(self::JOB_TITLE_REFERENCE_28, $jobTitle);
        $manager->persist($jobTitle);

        $jobTitle = new JobTitle();
        $jobTitle->setSlug('numerique-digital');
        $jobTitle->setLabel('Numérique');
        $this->addReference(self::JOB_TITLE_REFERENCE_29, $jobTitle);
        $manager->persist($jobTitle);

        $jobTitle = new JobTitle();
        $jobTitle->setSlug('responsable-paie');
        $jobTitle->setLabel('Responsable Paie');
        $this->addReference(self::JOB_TITLE_REFERENCE_30, $jobTitle);
        $manager->persist($jobTitle);

        $jobTitle = new JobTitle();
        $jobTitle->setSlug('ressources-humaines');
        $jobTitle->setLabel('Ressources Humaines');
        $this->addReference(self::JOB_TITLE_REFERENCE_31, $jobTitle);
        $manager->persist($jobTitle);

        $jobTitle = new JobTitle();
        $jobTitle->setSlug('secretaire-juridique');
        $jobTitle->setLabel('Secrétaire Juridique');
        $this->addReference(self::JOB_TITLE_REFERENCE_32, $jobTitle);
        $manager->persist($jobTitle);

        $jobTitle = new JobTitle();
        $jobTitle->setSlug('senior-manager-audit');
        $jobTitle->setLabel('Senior Manager Audit');
        $this->addReference(self::JOB_TITLE_REFERENCE_33, $jobTitle);
        $manager->persist($jobTitle);

        $jobTitle = new JobTitle();
        $jobTitle->setSlug('transmission/cession');
        $jobTitle->setLabel('Transmission / Cession');
        $this->addReference(self::JOB_TITLE_REFERENCE_34, $jobTitle);
        $manager->persist($jobTitle);

        $manager->flush();
    }
}
