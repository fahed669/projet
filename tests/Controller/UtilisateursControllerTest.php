<?php

namespace App\Test\Controller;

use App\Entity\Utilisateurs;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UtilisateursControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $manager;
    private EntityRepository $repository;
    private string $path = '/utilisateurs/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $this->repository = $this->manager->getRepository(Utilisateurs::class);

        foreach ($this->repository->findAll() as $object) {
            $this->manager->remove($object);
        }

        $this->manager->flush();
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Utilisateur index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'utilisateur[email]' => 'Testing',
            'utilisateur[cin]' => 'Testing',
            'utilisateur[mdp]' => 'Testing',
            'utilisateur[nom]' => 'Testing',
            'utilisateur[prenom]' => 'Testing',
            'utilisateur[numtelephone]' => 'Testing',
            'utilisateur[datenaissance]' => 'Testing',
            'utilisateur[genre]' => 'Testing',
            'utilisateur[createddate]' => 'Testing',
            'utilisateur[role]' => 'Testing',
            'utilisateur[active]' => 'Testing',
            'utilisateur[adresse]' => 'Testing',
            'utilisateur[ville]' => 'Testing',
            'utilisateur[pays]' => 'Testing',
            'utilisateur[numlicense]' => 'Testing',
            'utilisateur[datelicense]' => 'Testing',
            'utilisateur[competences]' => 'Testing',
            'utilisateur[disponibilite]' => 'Testing',
            'utilisateur[secteur]' => 'Testing',
            'utilisateur[idabonnement]' => 'Testing',
            'utilisateur[idconvention]' => 'Testing',
        ]);

        self::assertResponseRedirects('/sweet/food/');

        self::assertSame(1, $this->getRepository()->count([]));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Utilisateurs();
        $fixture->setEmail('My Title');
        $fixture->setCin('My Title');
        $fixture->setMdp('My Title');
        $fixture->setNom('My Title');
        $fixture->setPrenom('My Title');
        $fixture->setNumtelephone('My Title');
        $fixture->setDatenaissance('My Title');
        $fixture->setGenre('My Title');
        $fixture->setCreateddate('My Title');
        $fixture->setRole('My Title');
        $fixture->setActive('My Title');
        $fixture->setAdresse('My Title');
        $fixture->setVille('My Title');
        $fixture->setPays('My Title');
        $fixture->setNumlicense('My Title');
        $fixture->setDatelicense('My Title');
        $fixture->setCompetences('My Title');
        $fixture->setDisponibilite('My Title');
        $fixture->setSecteur('My Title');
        $fixture->setIdabonnement('My Title');
        $fixture->setIdconvention('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Utilisateur');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Utilisateurs();
        $fixture->setEmail('Value');
        $fixture->setCin('Value');
        $fixture->setMdp('Value');
        $fixture->setNom('Value');
        $fixture->setPrenom('Value');
        $fixture->setNumtelephone('Value');
        $fixture->setDatenaissance('Value');
        $fixture->setGenre('Value');
        $fixture->setCreateddate('Value');
        $fixture->setRole('Value');
        $fixture->setActive('Value');
        $fixture->setAdresse('Value');
        $fixture->setVille('Value');
        $fixture->setPays('Value');
        $fixture->setNumlicense('Value');
        $fixture->setDatelicense('Value');
        $fixture->setCompetences('Value');
        $fixture->setDisponibilite('Value');
        $fixture->setSecteur('Value');
        $fixture->setIdabonnement('Value');
        $fixture->setIdconvention('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'utilisateur[email]' => 'Something New',
            'utilisateur[cin]' => 'Something New',
            'utilisateur[mdp]' => 'Something New',
            'utilisateur[nom]' => 'Something New',
            'utilisateur[prenom]' => 'Something New',
            'utilisateur[numtelephone]' => 'Something New',
            'utilisateur[datenaissance]' => 'Something New',
            'utilisateur[genre]' => 'Something New',
            'utilisateur[createddate]' => 'Something New',
            'utilisateur[role]' => 'Something New',
            'utilisateur[active]' => 'Something New',
            'utilisateur[adresse]' => 'Something New',
            'utilisateur[ville]' => 'Something New',
            'utilisateur[pays]' => 'Something New',
            'utilisateur[numlicense]' => 'Something New',
            'utilisateur[datelicense]' => 'Something New',
            'utilisateur[competences]' => 'Something New',
            'utilisateur[disponibilite]' => 'Something New',
            'utilisateur[secteur]' => 'Something New',
            'utilisateur[idabonnement]' => 'Something New',
            'utilisateur[idconvention]' => 'Something New',
        ]);

        self::assertResponseRedirects('/utilisateurs/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getEmail());
        self::assertSame('Something New', $fixture[0]->getCin());
        self::assertSame('Something New', $fixture[0]->getMdp());
        self::assertSame('Something New', $fixture[0]->getNom());
        self::assertSame('Something New', $fixture[0]->getPrenom());
        self::assertSame('Something New', $fixture[0]->getNumtelephone());
        self::assertSame('Something New', $fixture[0]->getDatenaissance());
        self::assertSame('Something New', $fixture[0]->getGenre());
        self::assertSame('Something New', $fixture[0]->getCreateddate());
        self::assertSame('Something New', $fixture[0]->getRole());
        self::assertSame('Something New', $fixture[0]->getActive());
        self::assertSame('Something New', $fixture[0]->getAdresse());
        self::assertSame('Something New', $fixture[0]->getVille());
        self::assertSame('Something New', $fixture[0]->getPays());
        self::assertSame('Something New', $fixture[0]->getNumlicense());
        self::assertSame('Something New', $fixture[0]->getDatelicense());
        self::assertSame('Something New', $fixture[0]->getCompetences());
        self::assertSame('Something New', $fixture[0]->getDisponibilite());
        self::assertSame('Something New', $fixture[0]->getSecteur());
        self::assertSame('Something New', $fixture[0]->getIdabonnement());
        self::assertSame('Something New', $fixture[0]->getIdconvention());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();
        $fixture = new Utilisateurs();
        $fixture->setEmail('Value');
        $fixture->setCin('Value');
        $fixture->setMdp('Value');
        $fixture->setNom('Value');
        $fixture->setPrenom('Value');
        $fixture->setNumtelephone('Value');
        $fixture->setDatenaissance('Value');
        $fixture->setGenre('Value');
        $fixture->setCreateddate('Value');
        $fixture->setRole('Value');
        $fixture->setActive('Value');
        $fixture->setAdresse('Value');
        $fixture->setVille('Value');
        $fixture->setPays('Value');
        $fixture->setNumlicense('Value');
        $fixture->setDatelicense('Value');
        $fixture->setCompetences('Value');
        $fixture->setDisponibilite('Value');
        $fixture->setSecteur('Value');
        $fixture->setIdabonnement('Value');
        $fixture->setIdconvention('Value');

        $$this->manager->remove($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertResponseRedirects('/utilisateurs/');
        self::assertSame(0, $this->repository->count([]));
    }
}
