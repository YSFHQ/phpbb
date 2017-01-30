## List of events

 Event name :  paybas.recenttopics.sql_pull_topics_data

 Description : Allows for modification of SQL query before the topics data is retrieved

 Placement : pbwow.process_pf_show

 Since 2.0.0

 Arguments :

  - @var    array    sql_array        The SQL array

-----------

 Event name :  paybas.recenttopics.modify_topics_list

 Description : Event to modify the topics list data before we start the display loop

 Placement : paybas\recenttopics\core\recenttopics\display_recent_topics

 Since : 2.0.1

 Arguments :

 - @var   array    topic_list        Array of all the topic IDs
 - @var   array    rowset            The full topics list array



-----------

 Event name :  paybas.recenttopics.modify_tpl_ary

 Description : Modify the topic data before it is assigned to the template

 Placement : paybas\recenttopics\core\recenttopics\display_recent_topics

 Since 2.0.0

 Arguments :

 - @var   array    row            Array with topic data
 - @var   array    tpl_ary        Template block array with topic data


-----------

 Event name :  paybas.recenttopics.sql_pull_topics_list

 Description : Event to modify the SQL query before the allowed topics list data is retrieved

 Placement : paybas\recenttopics\core\recenttopics\gettopiclist

 Since 2.0.4

 Arguments :

 - @var   array    sql_array        The SQL array

-----------

 Event name :  paybas.recenttopics.modify_topictitle

 Description : Event to modify the topic title by adding a prefix

 Placement : paybas\recenttopics\core\recenttopics\display_recent_topics

 Since 2.1.3
 
 Arguments :

 - @row         array  'forum_row'
 - topic_title  string 'topic title to modify'
