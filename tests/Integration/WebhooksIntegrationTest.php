<?php
//
// WARNING: Do not edit by hand, this file was generated by Crank:
// https://github.com/gocardless/crank
//

namespace GoCardlessPro\Integration;

class WebhooksIntegrationTest extends IntegrationTestBase
{
    public function testResourceModelExists()
    {
        $obj = new \GoCardlessPro\Resources\Webhook(array());
        $this->assertNotNull($obj);
    }
    
    public function testWebhooksList()
    {
        $fixture = $this->loadJsonFixture('webhooks')->list;
        $this->stub_request($fixture);

        $service = $this->client->webhooks();
        $response = call_user_func_array(array($service, 'list'), (array)$fixture->url_params);

        $body = $fixture->body->webhooks;
    
        $records = $response->records;
        $this->assertInstanceOf('\GoCardlessPro\Core\ListResponse', $response);
        $this->assertInstanceOf('\GoCardlessPro\Resources\Webhook', $records[0]);

        $this->assertEquals($fixture->body->meta->cursors->before, $response->before);
        $this->assertEquals($fixture->body->meta->cursors->after, $response->after);
    

    
        foreach (range(0, count($body) - 1) as $num) {
            $record = $records[$num];
            $this->assertEquals($body[$num]->created_at, $record->created_at);
            $this->assertEquals($body[$num]->id, $record->id);
            $this->assertEquals($body[$num]->is_test, $record->is_test);
            $this->assertEquals($body[$num]->request_body, $record->request_body);
            $this->assertEquals($body[$num]->request_headers, $record->request_headers);
            $this->assertEquals($body[$num]->response_body, $record->response_body);
            $this->assertEquals($body[$num]->response_body_truncated, $record->response_body_truncated);
            $this->assertEquals($body[$num]->response_code, $record->response_code);
            $this->assertEquals($body[$num]->response_headers, $record->response_headers);
            $this->assertEquals($body[$num]->response_headers_content_truncated, $record->response_headers_content_truncated);
            $this->assertEquals($body[$num]->response_headers_count_truncated, $record->response_headers_count_truncated);
            $this->assertEquals($body[$num]->successful, $record->successful);
            $this->assertEquals($body[$num]->url, $record->url);
            
        }

        $expectedPathRegex = $this->extract_resource_fixture_path_regex($fixture);
        $dispatchedRequest = $this->history[0]['request'];
        $this->assertRegExp($expectedPathRegex, $dispatchedRequest->getUri()->getPath());
    }

    
    public function testWebhooksGet()
    {
        $fixture = $this->loadJsonFixture('webhooks')->get;
        $this->stub_request($fixture);

        $service = $this->client->webhooks();
        $response = call_user_func_array(array($service, 'get'), (array)$fixture->url_params);

        $body = $fixture->body->webhooks;
    
        $this->assertInstanceOf('\GoCardlessPro\Resources\Webhook', $response);

        $this->assertEquals($body->created_at, $response->created_at);
        $this->assertEquals($body->id, $response->id);
        $this->assertEquals($body->is_test, $response->is_test);
        $this->assertEquals($body->request_body, $response->request_body);
        $this->assertEquals($body->request_headers, $response->request_headers);
        $this->assertEquals($body->response_body, $response->response_body);
        $this->assertEquals($body->response_body_truncated, $response->response_body_truncated);
        $this->assertEquals($body->response_code, $response->response_code);
        $this->assertEquals($body->response_headers, $response->response_headers);
        $this->assertEquals($body->response_headers_content_truncated, $response->response_headers_content_truncated);
        $this->assertEquals($body->response_headers_count_truncated, $response->response_headers_count_truncated);
        $this->assertEquals($body->successful, $response->successful);
        $this->assertEquals($body->url, $response->url);
    

        $expectedPathRegex = $this->extract_resource_fixture_path_regex($fixture);
        $dispatchedRequest = $this->history[0]['request'];
        $this->assertRegExp($expectedPathRegex, $dispatchedRequest->getUri()->getPath());
    }

    
    public function testWebhooksRetry()
    {
        $fixture = $this->loadJsonFixture('webhooks')->retry;
        $this->stub_request($fixture);

        $service = $this->client->webhooks();
        $response = call_user_func_array(array($service, 'retry'), (array)$fixture->url_params);

        $body = $fixture->body->webhooks;
    
        $this->assertInstanceOf('\GoCardlessPro\Resources\Webhook', $response);

        $this->assertEquals($body->created_at, $response->created_at);
        $this->assertEquals($body->id, $response->id);
        $this->assertEquals($body->is_test, $response->is_test);
        $this->assertEquals($body->request_body, $response->request_body);
        $this->assertEquals($body->request_headers, $response->request_headers);
        $this->assertEquals($body->response_body, $response->response_body);
        $this->assertEquals($body->response_body_truncated, $response->response_body_truncated);
        $this->assertEquals($body->response_code, $response->response_code);
        $this->assertEquals($body->response_headers, $response->response_headers);
        $this->assertEquals($body->response_headers_content_truncated, $response->response_headers_content_truncated);
        $this->assertEquals($body->response_headers_count_truncated, $response->response_headers_count_truncated);
        $this->assertEquals($body->successful, $response->successful);
        $this->assertEquals($body->url, $response->url);
    

        $expectedPathRegex = $this->extract_resource_fixture_path_regex($fixture);
        $dispatchedRequest = $this->history[0]['request'];
        $this->assertRegExp($expectedPathRegex, $dispatchedRequest->getUri()->getPath());
    }

    public function testWebhooksRetryWithIdempotencyConflict()
    {
        $fixture = $this->loadJsonFixture('webhooks')->retry;

        $idempotencyConflictResponseFixture = $this->loadFixture('idempotent_creation_conflict_invalid_state_error');

        // The POST request responds with a 409 to our original POST, due to an idempotency conflict
        $this->mock->append(new \GuzzleHttp\Psr7\Response(409, [], $idempotencyConflictResponseFixture));

        // The client makes a second request to fetch the resource that was already
        // created using our idempotency key. It responds with the created resource,
        // which looks just like the response for a successful POST request.
        $this->mock->append(new \GuzzleHttp\Psr7\Response(200, [], json_encode($fixture->body)));

        $service = $this->client->webhooks();
        $response = call_user_func_array(array($service, 'retry'), (array)$fixture->url_params);
        $body = $fixture->body->webhooks;

        $this->assertInstanceOf('\GoCardlessPro\Resources\Webhook', $response);

        $this->assertEquals($body->created_at, $response->created_at);
        $this->assertEquals($body->id, $response->id);
        $this->assertEquals($body->is_test, $response->is_test);
        $this->assertEquals($body->request_body, $response->request_body);
        $this->assertEquals($body->request_headers, $response->request_headers);
        $this->assertEquals($body->response_body, $response->response_body);
        $this->assertEquals($body->response_body_truncated, $response->response_body_truncated);
        $this->assertEquals($body->response_code, $response->response_code);
        $this->assertEquals($body->response_headers, $response->response_headers);
        $this->assertEquals($body->response_headers_content_truncated, $response->response_headers_content_truncated);
        $this->assertEquals($body->response_headers_count_truncated, $response->response_headers_count_truncated);
        $this->assertEquals($body->successful, $response->successful);
        $this->assertEquals($body->url, $response->url);
        

        $expectedPathRegex = $this->extract_resource_fixture_path_regex($fixture);
        $conflictRequest = $this->history[0]['request'];
        $this->assertRegExp($expectedPathRegex, $conflictRequest->getUri()->getPath());
        $getRequest = $this->history[1]['request'];
        $this->assertEquals($getRequest->getUri()->getPath(), '/webhooks/ID123');
    }
    
}
