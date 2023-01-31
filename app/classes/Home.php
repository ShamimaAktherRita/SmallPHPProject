<?php


namespace app\classes;


class Home
{
    private $cards;

    public function __construct()
    {
        $this->cards = [
            0=>[
                'id' => 1,
                'title' => 'Card Header 1',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi at culpa eaque, earum ex inventore maiores minus natus non nulla optio praesentium qui quidem quod recusandae, rem similique totam.',
            ],
            1=>[
                'id'=>2,
                'title'=>'Card Header 2',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi at culpa eaque, earum ex inventore maiores minus natus non nulla optio praesentium qui quidem quod recusandae, rem similique totam.
                                 <br/>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi at culpa eaque, earum ex inventore maiores minus natus non nulla optio praesentium qui quidem quod recusandae, rem similique totam.',
            ],
            2=>[
                'id'=>3,
                'title' => 'Card Header 3',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi at culpa eaque, earum ex inventore maiores minus natus non nulla optio praesentium qui quidem quod recusandae, rem similique totam.
                                 <br/>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi at culpa eaque, earum ex inventore maiores minus natus non nulla optio praesentium qui quidem quod recusandae, rem similique totam.
                                 <br/>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi at culpa eaque, earum ex inventore maiores minus natus non nulla optio praesentium qui quidem quod recusandae, rem similique totam.',
            ],
        ];

        $this->posts = [
            0=>[
                'id' => 1,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi at culpa eaque, earum ex inventore maiores minus natus non nulla optio praesentium qui quidem quod recusandae, rem similique totam.',
                'image' => '2.jpg'
                ],
            1=>[
                'id'=>2,
                'description'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi at culpa eaque, earum ex inventore maiores minus natus non nulla optio praesentium qui quidem quod recusandae, rem similique totam.',
                'image' => '3.jpg'
                ],
            2=>[
                'id'=>3,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi at culpa eaque, earum ex inventore maiores minus natus non nulla optio praesentium qui quidem quod recusandae, rem similique totam.',
                'image' => '11.jpg'
                ],
        ];

        $this->infos = [
            0=>[
                'id' => 1,
                'title' => 'This is a Header',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi at culpa eaque, earum ex inventore maiores minus natus non nulla optio praesentium qui quidem quod recusandae, rem similique totam.',
//                'image' => 'bitm.jpg'
                ],
        ];
    }

    public function allCards()
    {
        return $this->cards;
    }

    public function getCardDetails($cardId)
    {
        foreach($this->cards as $card)
        {
            if($card['id'] == $cardId)
            {
                return $card;
            }
        }
    }
    public function allPosts()
    {
        return $this->posts;
    }

    public function getPostDetails($postId)
    {
        foreach($this->posts as $post)
        {
            if($post['id'] == $postId)
            {
                return $post;
            }
        }
    }
    public function allInfos()
    {
        return $this->infos;
    }

    public function getInfoDetails($infoId)
    {
        foreach($this->infos as $info)
        {
            if($info['id'] == $infoId)
            {
                return $info;
            }
        }
    }

 public function index()

 {
     header('Location: action.php?page=home');
 }

}