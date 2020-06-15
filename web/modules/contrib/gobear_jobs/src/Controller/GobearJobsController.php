<?php

namespace Drupal\gobear_jobs\Controller;

class GobearJobsController
{
    public function jobs()
    {
        $client = \Drupal::httpClient();
        $request = $client->get('https://jobs.github.com/positions.json?location=new+york');
        $items = json_decode($request->getBody());

        $headers = ['Title', 'Company', 'Location', 'Type', 'Created at'];

        return [
            '#theme' => 'jobs_list',
            '#items' => $items,
            '#headers' => $headers
        ];
    }
}
