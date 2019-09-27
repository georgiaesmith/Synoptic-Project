<?php

use Illuminate\Database\Seeder;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table( 'media_database' )->delete();
        DB::table( 'media_database' )->insert([
        [
          'name' => 'Dancing Queen',
          'artist' => 'ABBA',
          'album' => 'Arrival'
        ],
        [
          'name' => 'Knowing me, Knowing you',
          'artist' => 'ABBA',
          'album' => 'Arrival'
        ],
        [
          'name' => 'Money, Money, Money',
          'artist' => 'ABBA',
          'album' => 'Arrival'
        ],
        [
          'name' => 'When I kissed the teacher',
          'artist' => 'ABBA',
          'album' => 'Arrival'
        ],
        [
          'name' => 'My Love My Life',
          'artist' => 'ABBA',
          'album' => 'Arrival'
        ],
        [
          'name' => 'Dum Dum Didle',
          'artist' => 'ABBA',
          'album' => 'Arrival'
        ],
        [
          'name' => 'Thats Me',
          'artist' => 'ABBA',
          'album' => 'Arrival'
        ],
        [
          'name' => 'Why did it have to be me',
          'artist' => 'ABBA',
          'album' => 'Arrival',
        ],
        [
          'name' => 'Tiger',
          'artist' => 'ABBA',
          'album' => 'Arrival'
        ],
        [
          'name' => 'Arrival',
          'artist' => 'ABBA',
          'album' => 'Arrival'
        ],
        [
          'name' => '1+1',
          'artist' => 'Beyonce',
          'album' => '4'
        ],
        [
          'name' => 'I Care',
          'artist' => 'Beyonce',
          'album' => '4'
        ],
        [
          'name' => 'I Miss You',
          'artist' => 'Beyonce',
          'album' => '4'
        ],
        [
          'name' => 'Best Thing I Never Had',
          'artist' => 'Beyonce',
          'album' => '4'
        ],
        [
          'name' => 'Party',
          'artist' => 'Beyonce',
          'album' => '4'
        ],
        [
          'name' => 'Rather Die Young',
          'artist' => 'Beyonce',
          'album' => '4'
        ],
        [
          'name' => 'Start Over',
          'artist' => 'Beyonce',
          'album' => '4'
        ],
        [
          'name' => 'Love on Top',
          'artist' => 'Beyonce',
          'album' => '4'
        ],
        [
          'name' => 'Countdown',
          'artist' => 'Beyonce',
          'album' => '4'
        ],
        [
          'name' => 'End of Time',
          'artist' => 'Beyonce',
          'album' => '4'
        ],
        [
          'name' => 'I Was Here',
          'artist' => 'Beyonce',
          'album' => '4'
        ],
        [
          'name' => 'Run the World (Girls)',
          'artist' => 'Beyonce',
          'album' => '4'
        ],
        [
          'name' => 'Acceptable in the 80s',
          'artist' => 'Calvin Harris',
          'album' => 'I Created Disco'
        ],
        [
          'name' => 'The Girls',
          'artist' => 'Calvin Harris',
          'album' => 'I Created Disco'
        ],
        [
          'name' => 'Ready for the Weekend',
          'artist' => 'Calvin Harris',
          'album' => 'Ready for the Weekend'
        ],
        [
          'name' => 'Flasback',
          'artist' => 'Calvin Harris',
          'album' => 'Ready for the Weekend'
        ],
        [
          'name' => 'Bounce',
          'artist' => 'Calvin Harris',
          'album' => '18 Months'
        ],
        [
          'name' => 'Feel So Close',
          'artist' => 'Calvin Harris',
          'album' => '18 Months'
        ],
        [
          'name' => 'Lets Go',
          'artist' => 'Calvin Harris ft. Ne-Yo',
          'album' => '18 Months'
        ],
        [
          'name' => 'Sweet Nothing',
          'artist' => 'Calvin Harris ft. Florence Welch',
          'album' => '18 Months'
        ],
        [
          'name' => 'When Love Takes Over',
          'artist' => 'David Guetta ft. Kelly Rowland',
          'album' => 'One Love'
        ],
        [
          'name' => 'Memories',
          'artist' => 'David Guetta ft. Kid Cudi',
          'album' => 'One Love'
        ],
        [
          'name' => 'Without You',
          'artist' => 'David Guetta ft.Usher',
          'album' => 'Nothing but the Beat'
        ],
        [
          'name' => 'Titanium',
          'artist' => 'David Guetta ft. Sia',
          'album' => 'Nothing but the Beat'
        ],
        [
          'name' => 'Lego House',
          'artist' => 'Ed Sheeran',
          'album' => '+'
        ],
        [
          'name' => 'Sing',
          'artist' => 'Ed Sheeran',
          'album' => 'X'
        ],
        [
          'name' => 'Dont',
          'artist' => 'Ed Sheeran',
          'album' => 'X'
        ],
        [
          'name' => 'Thinking Out Loud',
          'artist' => 'Ed Sheeran',
          'album' => 'X'
        ],
        [
          'name' => 'Photograph',
          'artist' => 'Ed Sheeran',
          'album' => 'X'
        ],
        [
          'name' => 'Castle on the Hill',
          'artist' => 'Ed Sheeran',
          'album' => '÷'
        ],
        [
          'name' => 'Shape of You',
          'artist' => 'Ed Sheeran',
          'album' => '÷'
        ],
        [
          'name' => 'Galway Girl',
          'artist' => 'Ed Sheeran',
          'album' => '÷'
        ],
        [
          'name' => 'Perfect',
          'artist' => 'Ed Sheeran',
          'album' => '÷'
        ],
        [
          'name' => 'Take Me Back to London',
          'artist' => 'Ed Sheeran ft. Stormzy, Aitch and Jaykae',
          'album' => 'No.6 Collaborations Project'
        ],
        [
          'name' => 'Dont Call Me Angel (Charlies Angels)',
          'artist' => 'Ariana Grande, Miley Cyrus and Lana Del Rey',
          'album' => ''
        ],
        [
          'name' => 'Bruises',
          'artist' => 'Lewis Capaldi',
          'album' => 'Divinely Uninspired to a Hellish Extent'
        ],
        [
          'name' => 'Lost On You',
          'artist' => 'Lewis Capaldi',
          'album' => 'Divinely Uninspired to a Hellish Extent'
        ],
        [
          'name' => 'Fade',
          'artist' => 'Lewis Capaldi',
          'album' => 'Divinely Uninspired to a Hellish Extent'
        ],
        [
          'name' => 'Grace',
          'artist' => 'Lewis Capaldi',
          'album' => 'Divinely Uninspired to a Hellish Extent'
        ],
        [
          'name' => 'Someone You Loved',
          'artist' => 'Lewis Capaldi',
          'album' => 'Divinely Uninspired to a Hellish Extent'
        ],
        [
          'name' => 'Hold Me While You Wait',
          'artist' => 'Lewis Capaldi',
          'album' => 'Divinely Uninspired to a Hellish Extent'
        ],
        [
          'name' => 'Supersonic',
          'artist' => 'Oasis',
          'album' => 'Definitely Maybe'
        ],
        [
          'name' => 'Live Forever',
          'artist' => 'Oasis',
          'album' => 'Definitely Maybe'
        ],

      ]);
    }
}
