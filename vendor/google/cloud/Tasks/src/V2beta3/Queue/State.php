<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2beta3/queue.proto

namespace Google\Cloud\Tasks\V2beta3\Queue;

/**
 * State of the queue.
 *
 * Protobuf type <code>google.cloud.tasks.v2beta3.Queue.State</code>
 */
class State
{
    /**
     * Unspecified state.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The queue is running. Tasks can be dispatched.
     * If the queue was created using Cloud Tasks and the queue has
     * had no activity (method calls or task dispatches) for 30 days,
     * the queue may take a few minutes to re-activate. Some method
     * calls may return [NOT_FOUND][google.rpc.Code.NOT_FOUND] and
     * tasks may not be dispatched for a few minutes until the queue
     * has been re-activated.
     *
     * Generated from protobuf enum <code>RUNNING = 1;</code>
     */
    const RUNNING = 1;
    /**
     * Tasks are paused by the user. If the queue is paused then Cloud
     * Tasks will stop delivering tasks from it, but more tasks can
     * still be added to it by the user.
     *
     * Generated from protobuf enum <code>PAUSED = 2;</code>
     */
    const PAUSED = 2;
    /**
     * The queue is disabled.
     * A queue becomes `DISABLED` when
     * [queue.yaml](https://cloud.google.com/appengine/docs/python/config/queueref) or
     * [queue.xml](https://cloud.google.com/appengine/docs/standard/java/config/queueref) is uploaded
     * which does not contain the queue. You cannot directly disable a queue.
     * When a queue is disabled, tasks can still be added to a queue
     * but the tasks are not dispatched.
     * To permanently delete this queue and all of its tasks, call
     * [DeleteQueue][google.cloud.tasks.v2beta3.CloudTasks.DeleteQueue].
     *
     * Generated from protobuf enum <code>DISABLED = 3;</code>
     */
    const DISABLED = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(State::class, \Google\Cloud\Tasks\V2beta3\Queue_State::class);

