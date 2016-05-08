@exam
Feature: Start DVR Recording

  @exam-initial
  Scenario: Start an MP4 Recording

    Given I add "CONTENT_TYPE" header equal to "application/json"
    And I add "HTTP_ACCEPT" header equal to "application/json"
    When I send a GET request to "/api/exam/foo"
    Then the response status code should be 200
    And print last response