<?php

namespace App\DataFixtures\ORM;

use App\Entity\Author;
use App\Entity\BlogPost;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class Fixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $author = new Author();
        $author
            ->setName('Joe ')
            ->setTitle('Tour leader')
            ->setUsername('auth0-username')
            ->setCompany('The Writing Company')
            ->setShortBio('Seychelles (/seɪˈʃɛlz/ (About this soundlisten) say-SHELZ; French: [sɛʃɛl][5][6][7] or [seʃ-][8]), officially the Republic of Seychelles (French: République des Seychelles; Creole: La Repiblik Sesel), is an archipelago country in the Indian Ocean. The capital of the 115-island country, Victoria, lies 1,500 kilometres (932 mi) east of mainland East Africa.')
            ->setPhone('0758433215')
            ->setFacebook('joebloggs')
            ->setTwitter('joe.bloggs')
            ->setGithub('joe-bloggs');

        $manager->persist($author);

        $blogPost = new BlogPost();
        $blogPost
            ->setTitle('Seychelles')
            ->setSlug('Seychelles')
            ->setDescription('Seychelles (/seɪˈʃɛlz/ (About this soundlisten) say-SHELZ; French: [sɛʃɛl][5][6][7] or [seʃ-][8]), officially the Republic of Seychelles (French: République des Seychelles; Creole: La Repiblik Sesel), is an archipelago country in the Indian Ocean. ')
            ->setBody('Seychelles (/seɪˈʃɛlz/ (About this soundlisten) say-SHELZ; French: [sɛʃɛl][5][6][7] or [seʃ-][8]), officially the Republic of Seychelles (French: République des Seychelles; Creole: La Repiblik Sesel), is an archipelago country in the Indian Ocean. The capital of the 115-island country, Victoria, lies 1,500 kilometres (932 mi) east of mainland East Africa. Other nearby island countries and territories include Comoros, Mayotte (region of France), Madagascar, Réunion (region of France) and Mauritius to the south; as well as the Maldives and Chagos Archipelago to the east. With a population of roughly 94,228, it has the smallest population of any sovereign African country.[9]

Seychelles is a member of the African Union, the Southern African Development Community, the Commonwealth of Nations, and the United Nations. After proclamation of independence from the United Kingdom in 1976, Seychelles has developed from a largely agricultural society to a market-based diversified economy, with agriculture being supplanted by rapidly rising service and public sectors as well as tourism. From 1976 until 2015, nominal GDP output has increased nearly sevenfold and the purchasing power parity nearly sixteenfold. In late 2010s, the President Danny Faure and the National Assembly presented plans to encourage foreign investment in order to further upgrade these sectors.

Today, Seychelles boasts the highest nominal per capita GDP in Africa, excluding the French regions. It is one of only a handful of countries in Africa with a high Human Development Index. Despite the country\'s newfound economic prosperity, poverty remains widespread and one finds a high level of economic inequality, one of the highest in the world, and unequal wealth distribution among the populace, the upper and ruling class commanding a vast proportion of the country\'s wealth.[10]

')
            ->setAuthor($author);
        $manager->persist($blogPost);
        $manager->flush();
    }
}