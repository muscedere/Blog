<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 28/10/18
 * Time: 09:13
 */

namespace App\DataFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Article;




class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

            $article = new Article();
            $article->setTitle('Framework PHP : Symfony 4');
            $article->setContent('PHP est un language vraiment cool');
            $manager->persist($article);
            $manager->flush();
    }
}