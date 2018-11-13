<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 26/10/18
 * Time: 20:44
 */

namespace App\DataFixtures;


use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Category;



class CategoryFixtures extends Fixture
{
    public $categories = [
        'PHP',
        'Javascript',
        'Java',
        'Ruby'

    ];
    public function load(ObjectManager $manager)
    {
        foreach ($this->categories as $key => $categoryName){
            $category = new Category();
            $category->setTitle('Les langages web');
            $category->setName($categoryName);
            $manager->persist($category);
        }

        $manager->flush();
    }
}