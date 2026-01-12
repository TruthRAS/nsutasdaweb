<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public static function job():array {
       return [
            [
            'id'=>1,
            'title'=>'Pastor',
            'Name'=>'James Gardener',
            'facebook'=>'http://www.facebook.com',
            'email'=>'rasrevelation@gmail.com',
            'mobile'=>0203201440,
            ],
            [
                'id'=>2,
                'title'=>'First Elder',
                'Name'=>'James Gardener',
                'facebook'=>'http://www.facebook.com',
                'email'=>'rasrevelation@gmail.com',
                'mobile'=>0203201440,
                ],
                [
                    'id'=>3,
                    'title'=>'Second Elder',
                    'Name'=>'James Gardener',
                    'facebook'=>'http://www.facebook.com',
                    'email'=>'rasrevelation@gmail.com',
                    'mobile'=>0203201440,
                    ]
                ];

    }
    public static function annoucement():array {
        return [
             [
             'id'=>1,
             'title'=>'Grettings',
             'description'=>'Good Morning my neighbours',
             'image_name'=>'great-wall-of-china.jpg',

             ],
             [
                'id'=>2,
                'title'=>'Grettings',
                'description'=>'Good Morning my neighbours',
                'image_name'=>'great-wall-of-china.jpg',

                ],
                [
                    'id'=>3,
                    'title'=>'Grettings',
                    'description'=>'Good Morning my neighbours',
                    'image_name'=>'great-wall-of-china.jpg',

                    ]
                 ];

     }
     public static function monday():array{
        return[
            [
                'title'=>'Morning Activity',
                'time'=>'7:30 am to 9:00 am',
                'days_activity'=>'Sabath Shcool',
                'prayer_topic'=>'',
                'lesson_number'=>'Lesson Six',
                'lesson_title'=>'Choir Meeting',
                'lesson'=>'',
                'Hym_title'=>'',
                'hymnal'=>'',
                'memory_text'=>"Again Jesus called the crowd to him and said,
                 “Listen to me, everyone, and understand this. 15 Nothing outside a person can defile them by going into them.
                Rather, it is what comes out of a person that defiles them.”"


            ],
            [
                'title'=>'Afternoon Activity',
                'time'=>'12:30 pm to 2:00 pm',
                'days_activity'=>'Choir Meetings',
                'prayer_topic'=>'',
                'lesson_number'=>'',
                'lesson_title'=>'',
                'lesson'=>'',
                'Hym_title'=>'Jesus is passing',
                'hymnal'=>'Jesus’ words in this passage have been a conundrum for many as
they ponder their relationship to the teachings of Leviticus 11 regarding
clean and unclean foods. Is Jesus doing away with such distinctions?
Are Seventh-day Adventists mistaken in teaching that church members
who eat meat are to eat it only from the clean-animal list?
First, it would be odd for Jesus suddenly to dismiss Mosaic instructions
in Mark 7:14–19 when He had just defended Moses against
tradition in Mark 7:6–13. Second, the very tradition that the Pharisees
were promoting does not have a basis in Old Testament teaching; the
food laws, in contrast, do. Third, what Mark 7:19 means when it says
that Jesus cleanses all food is not that the food laws are abolished but
instead that the tradition of touch contamination that the Pharisees had
made was invalid. This, for example, is that false notion that if you
could be contaminated by coming in contact with Gentiles, then you
also could be contaminated through contact with food that they had
touched',
                'memory_text'=>''

            ],
            [
                'title'=>'Evening Activity',
                'time'=>'7:30 pm to 9:00 pm',
                'days_activity'=>'Prayers',
                'prayer_topic'=>'Todays prayer Topic is.....',
                'lesson_number'=>'',
                'lesson_title'=>'Prayer Topic',
                'lesson'=>'',
                'hymnal'=>'',
                'Hym_title'=>'',
                'memory_text'=>''
            ]
            ];
     }

// Teusaday Data for the activitie
     public static function teusday():array{
        return[
            [
                //Morning activities
                'title'=>'Morning Activity',
                'time'=>'7:30 am to 9:00 am',
                'days_activity'=>'Sabath Shcool',
                'prayer_topic'=>'',
                'lesson_number'=>'Lesson Seven',
                'lesson_title'=>'Choir Meeting',
                'lesson'=>'',
                'hymnal'=>'Jesus’ words in this passage have been a conundrum for many as
they ponder their relationship to the teachings of Leviticus 11 regarding
clean and unclean foods. Is Jesus doing away with such distinctions?
Are Seventh-day Adventists mistaken in teaching that church members
who eat meat are to eat it only from the clean-animal list?
First, it would be odd for Jesus suddenly to dismiss Mosaic instructions
in Mark 7:14–19 when He had just defended Moses against
tradition in Mark 7:6–13. Second, the very tradition that the Pharisees
were promoting does not have a basis in Old Testament teaching; the
food laws, in contrast, do. Third, what Mark 7:19 means when it says
that Jesus cleanses all food is not that the food laws are abolished but
instead that the tradition of touch contamination that the Pharisees had
made was invalid. This, for example, is that false notion that if you
could be contaminated by coming in contact with Gentiles, then you
also could be contaminated through contact with food that they had
touched',
                'memory_text'=>"Again Jesus called the crowd to him and said,
                 “Listen to me, everyone, and understand this. 15 Nothing outside a person can defile them by going into them.
                Rather, it is what comes out of a person that defiles them.”"


            ],
            [
                //Data forAfternoon Activities
                'title'=>'Afternoon Activity',
                'time'=>'7:30 am to 9:00 am',
                'days_activity'=>'Choir Meetings',
                'prayer_topic'=>'',
                'lesson_number'=>'Lesson Six',
                'lesson_title'=>'Clean Hands or Clean Heart?',
                'lesson'=>'',
                'hymnal'=>'Jesus’ words in this passage have been a conundrum for many as
they ponder their relationship to the teachings of Leviticus 11 regarding
clean and unclean foods. Is Jesus doing away with such distinctions?
Are Seventh-day Adventists mistaken in teaching that church members
who eat meat are to eat it only from the clean-animal list?
First, it would be odd for Jesus suddenly to dismiss Mosaic instructions
in Mark 7:14–19 when He had just defended Moses against
tradition in Mark 7:6–13. Second, the very tradition that the Pharisees
were promoting does not have a basis in Old Testament teaching; the
food laws, in contrast, do. Third, what Mark 7:19 means when it says
that Jesus cleanses all food is not that the food laws are abolished but
instead that the tradition of touch contamination that the Pharisees had
made was invalid. This, for example, is that false notion that if you
could be contaminated by coming in contact with Gentiles, then you
also could be contaminated through contact with food that they had
touched',
                'memory_text'=>"Again Jesus called the crowd to him and said,
                 “Listen to me, everyone, and understand this. 15 Nothing outside a person can defile them by going into them.
                Rather, it is what comes out of a person that defiles them.”"

            ],
            [
                //Data for Evening Activities
                'title'=>'Evening Activity',
                'time'=>'7:30 pm to 9:00 pm',
                'days_activity'=>'Prayers',
                'prayer_topic'=>'Todays prayer Topic is.....',
                'lesson_number'=>'',
                'lesson_title'=>'Prayer Topic',
                'lesson'=>'',
                'hymnal'=>'',
                'memory_text'=>"Again Jesus called the crowd to him and said,
                 “Listen to me, everyone, and understand this. 15 Nothing outside a person can defile them by going into them.
                Rather, it is what comes out of a person that defiles them.”"

            ]
            ];
     }

        //Data for Wednesday Activity
     public static function wednesday():array{
        return[
            [
                //Morning activities
                'title'=>'Morning Activity',
                'time'=>'7:30 am to 9:00 am',
                'days_activity'=>'Sabath Shcool',
                'prayer_topic'=>'',
                'lesson_number'=>'Lesson Seven',
                'lesson_title'=>'Choir Meeting',
                'lesson'=>'',
                'hymnal'=>'Jesus’ words in this passage have been a conundrum for many as
they ponder their relationship to the teachings of Leviticus 11 regarding
clean and unclean foods. Is Jesus doing away with such distinctions?
Are Seventh-day Adventists mistaken in teaching that church members
who eat meat are to eat it only from the clean-animal list?
First, it would be odd for Jesus suddenly to dismiss Mosaic instructions
in Mark 7:14–19 when He had just defended Moses against
tradition in Mark 7:6–13. Second, the very tradition that the Pharisees
were promoting does not have a basis in Old Testament teaching; the
food laws, in contrast, do. Third, what Mark 7:19 means when it says
that Jesus cleanses all food is not that the food laws are abolished but
instead that the tradition of touch contamination that the Pharisees had
made was invalid. This, for example, is that false notion that if you
could be contaminated by coming in contact with Gentiles, then you
also could be contaminated through contact with food that they had
touched',
                'memory_text'=>''


            ],
            [
                //Data forAfternoon Activities
                'title'=>'Afternoon Activity',
                'time'=>'7:30 am to 9:00 am',
                'days_activity'=>'Choir Meetings',
                'prayer_topic'=>'',
                'lesson_number'=>'Lesson Six',
                'lesson_title'=>'Clean Hands or Clean Heart?',
                'lesson'=>'Tis So Sweet to Trust in Jesus
                        1
                        Tis so sweet to trust in Jesus,
                        Just to take Him at His word;
                        Just to rest upon His promise,
                        Just to know, "Thus saith the Lord."
                        Refrain
                        Jesus, Jesus, how I trust Him;
                        How Ive proved Him oer and oer!
                        Jesus, Jesus, precious Jesus!
                        O for grace to trust Him more!
                            2
                        O how sweet to trust in Jesus,
                        Just to trust His cleansing blood;
                        Just in simple faith to plunge me
                        Neath the healing, cleansing flood.
                        ',
                'memory_text'=>"Again Jesus called the crowd to him and said,
                 “Listen to me, everyone, and understand this. 15 Nothing outside a person can defile them by going into them.
                Rather, it is what comes out of a person that defiles them.”"

            ],
            [
                //Data for Evening Activities
                'title'=>'Evening Activity',
                'time'=>'7:30 pm to 9:00 pm',
                'days_activity'=>'Prayers',
                'prayer_topic'=>'Todays prayer Topic is.....',
                'lesson_number'=>'',
                'lesson_title'=>'Prayer Topic',
                'lesson'=>'',
                'memory_text'=>"Again Jesus called the crowd to him and said,
                 “Listen to me, everyone, and understand this. 15 Nothing outside a person can defile them by going into them.
                Rather, it is what comes out of a person that defiles them.”"

            ]
            ];
     }

     //Data for Thursday Activity
     public static function thursday():array{
        return[
            [
                //Morning activities
                'title'=>'Morning Activity',
                'time'=>'7:30 am to 9:00 am',
                'days_activity'=>'Sabath Shcool',
                'prayer_topic'=>'',
                'lesson_number'=>'Lesson Seven',
                'lesson_title'=>'Choir Meeting',
                'lesson'=>'Jesus’ words in this passage have been a conundrum for many as
                            they ponder their relationship to the teachings of Leviticus 11 regarding
                            clean and unclean foods. Is Jesus doing away with such distinctions?
                            Are Seventh-day Adventists mistaken in teaching that church members
                            who eat meat are to eat it only from the clean-animal list?
                            First, it would be odd for Jesus suddenly to dismiss Mosaic instructions in Mark 7:14–19 when He had just defended Moses against
                            tradition in Mark 7:6–13. Second, the very tradition that the Pharisees
                            were promoting does not have a basis in Old Testament teaching; the
                            food laws, in contrast, do. Third, what Mark 7:19 means when it says
                            that Jesus cleanses all food is not that the food laws are abolished but
                            instead that the tradition of touch contamination that the Pharisees had
                            made was invalid. This, for example, is that false notion that if you
                            could be contaminated by coming in contact with Gentiles, then you
                            also could be contaminated through contact with food that they had
                            touched',
                'memory_text'=>"Again Jesus called the crowd to him and said,
                 “Listen to me, everyone, and understand this. 15 Nothing outside a person can defile them by going into them.
                Rather, it is what comes out of a person that defiles them.”"


            ],
            [
                //Data forAfternoon Activities
                'title'=>'Afternoon Activity',
                'time'=>'7:30 am to 9:00 am',
                'days_activity'=>'Choir Meetings',
                'prayer_topic'=>'',
                'lesson_number'=>'Lesson Six',
                'lesson_title'=>'Clean Hands or Clean Heart?',
                'lesson'=>'Tis So Sweet to Trust in Jesus
                        1
                        Tis so sweet to trust in Jesus,
                        Just to take Him at His word;
                        Just to rest upon His promise,
                        Just to know, "Thus saith the Lord."
                        Refrain
                        Jesus, Jesus, how I trust Him;
                        How Ive proved Him oer and oer!
                        Jesus, Jesus, precious Jesus!
                        O for grace to trust Him more!
                            2
                        O how sweet to trust in Jesus,
                        Just to trust His cleansing blood;
                        Just in simple faith to plunge me
                        Neath the healing, cleansing flood.
                        ',
                'memory_text'=>"Again Jesus called the crowd to him and said,
                 “Listen to me, everyone, and understand this. 15 Nothing outside a person can defile them by going into them.
                Rather, it is what comes out of a person that defiles them.”"

            ],
            [
                //Data for Evening Activities
                'title'=>'Evening Activity',
                'time'=>'7:30 pm to 9:00 pm',
                'days_activity'=>'Prayers',
                'prayer_topic'=>'Todays prayer Topic is.....',
                'lesson_number'=>'',
                'lesson_title'=>'Prayer Topic',
                'lesson'=>'',
                'memory_text'=>"Again Jesus called the crowd to him and said,
                 “Listen to me, everyone, and understand this. 15 Nothing outside a person can defile them by going into them.
                Rather, it is what comes out of a person that defiles them.”"

            ]
            ];
     }


     //Data for Friday Activity
     public static function friday():array{
        return[
            [
                //Morning activities
                'title'=>'Morning Activity',
                'time'=>'7:30 am to 9:00 am',
                'days_activity'=>'Sabath Shcool',
                'prayer_topic'=>'',
                'lesson_number'=>'Lesson Seven',
                'lesson_title'=>'Choir Meeting',
                'lesson'=>'Jesus’ words in this passage have been a conundrum for many as
                            they ponder their relationship to the teachings of Leviticus 11 regarding
                            clean and unclean foods. Is Jesus doing away with such distinctions?
                            Are Seventh-day Adventists mistaken in teaching that church members
                            who eat meat are to eat it only from the clean-animal list?
                            First, it would be odd for Jesus suddenly to dismiss Mosaic instructions in Mark 7:14–19 when He had just defended Moses against
                            tradition in Mark 7:6–13. Second, the very tradition that the Pharisees
                            were promoting does not have a basis in Old Testament teaching; the
                            food laws, in contrast, do. Third, what Mark 7:19 means when it says
                            that Jesus cleanses all food is not that the food laws are abolished but
                            instead that the tradition of touch contamination that the Pharisees had
                            made was invalid. This, for example, is that false notion that if you
                            could be contaminated by coming in contact with Gentiles, then you
                            also could be contaminated through contact with food that they had
                            touched',
                'memory_text'=>"Again Jesus called the crowd to him and said,
                 “Listen to me, everyone, and understand this. 15 Nothing outside a person can defile them by going into them.
                Rather, it is what comes out of a person that defiles them.”"


            ],
            [
                //Data forAfternoon Activities
                'title'=>'Afternoon Activity',
                'time'=>'7:30 am to 9:00 am',
                'days_activity'=>'Choir Meetings',
                'prayer_topic'=>'',
                'lesson_number'=>'Lesson Six',
                'lesson_title'=>'Clean Hands or Clean Heart?',
                'lesson'=>'Tis So Sweet to Trust in Jesus
                        1
                        Tis so sweet to trust in Jesus,
                        Just to take Him at His word;
                        Just to rest upon His promise,
                        Just to know, "Thus saith the Lord."
                        Refrain
                        Jesus, Jesus, how I trust Him;
                        How Ive proved Him oer and oer!
                        Jesus, Jesus, precious Jesus!
                        O for grace to trust Him more!
                            2
                        O how sweet to trust in Jesus,
                        Just to trust His cleansing blood;
                        Just in simple faith to plunge me
                        Neath the healing, cleansing flood.
                        ',
                'memory_text'=>"Again Jesus called the crowd to him and said,
                 “Listen to me, everyone, and understand this. 15 Nothing outside a person can defile them by going into them.
                Rather, it is what comes out of a person that defiles them.”"

            ],
            [
                //Data for Evening Activities
                'title'=>'Evening Activity',
                'time'=>'7:30 pm to 9:00 pm',
                'days_activity'=>'Prayers',
                'prayer_topic'=>'Todays prayer Topic is.....',
                'lesson_number'=>'',
                'lesson_title'=>'Prayer Topic',
                'lesson'=>'',
                'memory_text'=>"Again Jesus called the crowd to him and said,
                 “Listen to me, everyone, and understand this. 15 Nothing outside a person can defile them by going into them.
                Rather, it is what comes out of a person that defiles them.”"

            ]
            ];
     }

     //Data for Saturday Activity
     public static function saturday():array{
        return[
            [
                //Morning activities
                'title'=>'Morning Activity',
                'time'=>'7:30 am to 9:00 am',
                'days_activity'=>'Sabath Shcool',
                'prayer_topic'=>'',
                'lesson_number'=>'Lesson Seven',
                'lesson_title'=>'Choir Meeting',
                'lesson'=>'Jesus’ words in this passage have been a conundrum for many as
                            they ponder their relationship to the teachings of Leviticus 11 regarding
                            clean and unclean foods. Is Jesus doing away with such distinctions?
                            Are Seventh-day Adventists mistaken in teaching that church members
                            who eat meat are to eat it only from the clean-animal list?
                            First, it would be odd for Jesus suddenly to dismiss Mosaic instructions in Mark 7:14–19 when He had just defended Moses against
                            tradition in Mark 7:6–13. Second, the very tradition that the Pharisees
                            were promoting does not have a basis in Old Testament teaching; the
                            food laws, in contrast, do. Third, what Mark 7:19 means when it says
                            that Jesus cleanses all food is not that the food laws are abolished but
                            instead that the tradition of touch contamination that the Pharisees had
                            made was invalid. This, for example, is that false notion that if you
                            could be contaminated by coming in contact with Gentiles, then you
                            also could be contaminated through contact with food that they had
                            touched',
                'memory_text'=>"Again Jesus called the crowd to him and said,
                 “Listen to me, everyone, and understand this. 15 Nothing outside a person can defile them by going into them.
                Rather, it is what comes out of a person that defiles them.”"


            ],
            [
                //Data forAfternoon Activities
                'title'=>'Afternoon Activity',
                'time'=>'7:30 am to 9:00 am',
                'days_activity'=>'Choir Meetings',
                'prayer_topic'=>'',
                'lesson_number'=>'Lesson Six',
                'lesson_title'=>'Clean Hands or Clean Heart?',
                'lesson'=>'Tis So Sweet to Trust in Jesus
                        1
                        Tis so sweet to trust in Jesus,
                        Just to take Him at His word;
                        Just to rest upon His promise,
                        Just to know, "Thus saith the Lord."
                        Refrain
                        Jesus, Jesus, how I trust Him;
                        How Ive proved Him oer and oer!
                        Jesus, Jesus, precious Jesus!
                        O for grace to trust Him more!
                            2
                        O how sweet to trust in Jesus,
                        Just to trust His cleansing blood;
                        Just in simple faith to plunge me
                        Neath the healing, cleansing flood.
                        ',
                'memory_text'=>"Again Jesus called the crowd to him and said,
                 “Listen to me, everyone, and understand this. 15 Nothing outside a person can defile them by going into them.
                Rather, it is what comes out of a person that defiles them.”"

            ],
            [
                //Data for Evening Activities
                'title'=>'Evening Activity',
                'time'=>'7:30 pm to 9:00 pm',
                'days_activity'=>'Prayers',
                'prayer_topic'=>'Todays prayer Topic is.....',
                'lesson_number'=>'',
                'lesson_title'=>'Prayer Topic',
                'lesson'=>'',
                'memory_text'=>"Again Jesus called the crowd to him and said,
                 “Listen to me, everyone, and understand this. 15 Nothing outside a person can defile them by going into them.
                Rather, it is what comes out of a person that defiles them.”"

            ]
            ];
     }


        //Data for Sunday's Activity
     public static function sunday():array{
        return[
            [
                //Morning activities
                'title'=>'Morning Activity',
                'time'=>'7:30 am to 9:00 am',
                'days_activity'=>'Sabath Shcool',
                'prayer_topic'=>'',
                'lesson_number'=>'Lesson Seven',
                'lesson_title'=>'Choir Meeting',
                'lesson'=>'Jesus’ words in this passage have been a conundrum for many as
                            they ponder their relationship to the teachings of Leviticus 11 regarding
                            clean and unclean foods. Is Jesus doing away with such distinctions?
                            Are Seventh-day Adventists mistaken in teaching that church members
                            who eat meat are to eat it only from the clean-animal list?
                            First, it would be odd for Jesus suddenly to dismiss Mosaic instructions in Mark 7:14–19 when He had just defended Moses against
                            tradition in Mark 7:6–13. Second, the very tradition that the Pharisees
                            were promoting does not have a basis in Old Testament teaching; the
                            food laws, in contrast, do. Third, what Mark 7:19 means when it says
                            that Jesus cleanses all food is not that the food laws are abolished but
                            instead that the tradition of touch contamination that the Pharisees had
                            made was invalid. This, for example, is that false notion that if you
                            could be contaminated by coming in contact with Gentiles, then you
                            also could be contaminated through contact with food that they had
                            touched',
                'memory_text'=>"Again Jesus called the crowd to him and said,
                 “Listen to me, everyone, and understand this. 15 Nothing outside a person can defile them by going into them.
                Rather, it is what comes out of a person that defiles them.”"


            ],
            [
                //Data forAfternoon Activities
                'title'=>'Afternoon Activity',
                'time'=>'7:30 am to 9:00 am',
                'days_activity'=>'Choir Meetings',
                'prayer_topic'=>'',
                'lesson_number'=>'Lesson Six',
                'lesson_title'=>'Clean Hands or Clean Heart?',
                'lesson'=>'Tis So Sweet to Trust in Jesus
                        1
                        Tis so sweet to trust in Jesus,
                        Just to take Him at His word;
                        Just to rest upon His promise,
                        Just to know, "Thus saith the Lord."
                        Refrain
                        Jesus, Jesus, how I trust Him;
                        How Ive proved Him oer and oer!
                        Jesus, Jesus, precious Jesus!
                        O for grace to trust Him more!
                            2
                        O how sweet to trust in Jesus,
                        Just to trust His cleansing blood;
                        Just in simple faith to plunge me
                        Neath the healing, cleansing flood.
                        ',
                'memory_text'=>"Again Jesus called the crowd to him and said,
                 “Listen to me, everyone, and understand this. 15 Nothing outside a person can defile them by going into them.
                Rather, it is what comes out of a person that defiles them.”"

            ],
            [
                //Data for Evening Activities
                'title'=>'Evening Activity',
                'time'=>'7:30 pm to 9:00 pm',
                'days_activity'=>'Prayers',
                'prayer_topic'=>'Todays prayer Topic is.....',
                'lesson_number'=>'',
                'lesson_title'=>'Prayer Topic',
                'lesson'=>'',
                'memory_text'=>"Again Jesus called the crowd to him and said,
                 “Listen to me, everyone, and understand this. 15 Nothing outside a person can defile them by going into them.
                Rather, it is what comes out of a person that defiles them.”"

            ]
            ];
     }
}

