<?php

namespace App\Http\Controllers\Swagger;


use App\Http\Controllers\Controller;


/**
 *  
 * @OA\Post(
 *      path="/api/posts",
 *      summary="Создание",
 *      tags={"Post"},
 *      security={{ "bearerAuth": {} }},
 * 
 *      @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="title", type="string", example="Example title"),
 *                      @OA\Property(property="likes", type="integer", example=100),
 *                  )
 *              }
 *          )     
 *      ),
 * 
 *      @OA\Response(
 *          response=200,
 *          description="ok",
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="object",
 *                  @OA\Property(property="id", type="integer", example=12),
 *                  @OA\Property(property="title", type="string", example="some example"),
 *                  @OA\Property(property="likes", type="integer", example=25),
 *              ),
 *          ),
 *      ),
 * ),
 * 
 * 
 *  *  
 * @OA\Get(
 *      path="/api/posts",
 *      summary="Список постов",
 *      tags={"Post"}, 
 *      security={{ "bearerAuth": {} }},
 * 
 *      @OA\Response(
 *          response=200,
 *          description="ok",
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="array", @OA\Items(
 *                  @OA\Property(property="id", type="integer", example=12),
 *                  @OA\Property(property="title", type="string", example="some example"),
 *                  @OA\Property(property="likes", type="integer", example=25),
 *              )),
 *          ),
 *      ),
 * ),
 * 
 * @OA\Get(
 *      path="/api/posts/{post}",
 *      summary="Один пост",
 *      tags={"Post"},
 *      security={{ "bearerAuth": {} }},
 *      @OA\Parameter(
 *          description="id поста",
 *          in="path",
 *          name="post",
 *          required=true,
 *          example=1
 *      ), 
 * 
 *      @OA\Response(
 *          response=200,
 *          description="ok",
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="object",
 *                  @OA\Property(property="id", type="integer", example=12),
 *                  @OA\Property(property="title", type="string", example="some example"),
 *                  @OA\Property(property="likes", type="integer", example=25),
 *              ),
 *          ),
 *      ),
 * ),
 * 
 * 
 * @OA\Patch(
 *      path="/api/posts/{post}",
 *      summary="Обновление поста",
 *      tags={"Post"},
 *      security={{ "bearerAuth": {} }},
 *      @OA\Parameter(
 *          description="id поста",
 *          in="path",
 *          name="post",
 *          required=true,
 *          example=12
 *      ), 
 * 
 *     @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="title", type="string", example="title for edit"),
 *                      @OA\Property(property="likes", type="integer", example=11),
 *                   )
 *               }
 *           )     
 *      ),
 * 
 *      @OA\Response(
 *          response=200,
 *          description="ok",
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="object",
 *                  @OA\Property(property="id", type="integer", example=12),
 *                  @OA\Property(property="title", type="string", example="some example"),
 *                  @OA\Property(property="likes", type="integer", example=25),
 *              ),
 *          ),
 *      ),
 * ),
 * 
 * 
 * 
 * @OA\Delete(
 *      path="/api/posts/{post}",
 *      summary="Удалить пост",
 *      tags={"Post"},
 *      security={{ "bearerAuth": {} }},
 *      @OA\Parameter(
 *          description="id поста",
 *          in="path",
 *          name="post",
 *          required=true,
 *          example=1
 *      ), 
 * 
 *      @OA\Response(
 *          response=200,
 *          description="ok",
 *          @OA\JsonContent(
 *              @OA\Property(property="message", type="string", example="done")
 *          ),
 *      ),
 * ),
 * 
 * 
 */
class PostController extends Controller
{
   
}
