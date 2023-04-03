<?php

namespace App\Test\Controller;

use App\Entity\Vehicules;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class VehiculesControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $manager;
    private EntityRepository $repository;
    private string $path = '/vehicules/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $this->repository = $this->manager->getRepository(Vehicules::class);

        foreach ($this->repository->findAll() as $object) {
            $this->manager->remove($object);
        }

        $this->manager->flush();
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Vehicule index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'vehicule[matricule]' => 'Testing',
            'vehicule[couleur]' => 'Testing',
            'vehicule[kilometrage]' => 'Testing',
            'vehicule[archivee]' => 'Testing',
            'vehicule[idmodele]' => 'Testing',
        ]);

        self::assertResponseRedirects('/sweet/food/');

        self::assertSame(1, $this->getRepository()->count([]));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Vehicules();
        $fixture->setMatricule('My Title');
        $fixture->setCouleur('My Title');
        $fixture->setKilometrage('My Title');
        $fixture->setArchivee('My Title');
        $fixture->setIdmodele('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Vehicule');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Vehicules();
        $fixture->setMatricule('Value');
        $fixture->setCouleur('Value');
        $fixture->setKilometrage('Value');
        $fixture->setArchivee('Value');
        $fixture->setIdmodele('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'vehicule[matricule]' => 'Something New',
            'vehicule[couleur]' => 'Something New',
            'vehicule[kilometrage]' => 'Something New',
            'vehicule[archivee]' => 'Something New',
            'vehicule[idmodele]' => 'Something New',
        ]);

        self::assertResponseRedirects('/vehicules/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getMatricule());
        self::assertSame('Something New', $fixture[0]->getCouleur());
        self::assertSame('Something New', $fixture[0]->getKilometrage());
        self::assertSame('Something New', $fixture[0]->getArchivee());
        self::assertSame('Something New', $fixture[0]->getIdmodele());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();
        $fixture = new Vehicules();
        $fixture->setMatricule('Value');
        $fixture->setCouleur('Value');
        $fixture->setKilometrage('Value');
        $fixture->setArchivee('Value');
        $fixture->setIdmodele('Value');

        $$this->manager->remove($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertResponseRedirects('/vehicules/');
        self::assertSame(0, $this->repository->count([]));
    }
}