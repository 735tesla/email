<?php

class SectionController extends BaseController {

	public function experimenting()
	{
		$section = "If you have never sponsored a hackathon before, we believe that hackGFS is a great place to start as it is an opportunity to show your everyday customers that you are progressive and care about the innovators of tomorrow. hackGFS may also offer the chance to enhance your brand as a whole.";

		return $section;
	}

	public function marketing()
	{
		$section = "Some students will be attending their first hackathon and they will be eager to meet and interact with [your company/Google]. hackGFS offers a great opportunity to market your company to a young audience. Handing out swag or goodies, such as laptop stickers, custom t-shirts and sunglasses is a great way to gain visibility with teenagers. Kids also have an influence on what their parents buy, so we encourage you to leave a lasting impression that may lead them to promote your product and not someone else’s.";

		return $section;
	}

	public function api()
	{
		$section = "By attending hackGFS, Google will have the opportunity to promote the use of its API platform and to build personal relationships with a new generation of hackers, while providing on site help and instruction, which we believe will be invaluable. You will be able to encourage the use of your API in the projects created at hackGFS and in turn, see new and creative ways it is put to use by inventive and talented young developers.";

		return $section;
	}

	public function vc()
	{
		$section = "hackGFS is a great place to raise awareness for your company/Google. It is an opportunity for you to let young hackers know you are there should they want to start a business while your portfolio companies can grow their audience and introduce hackers to their products and services. What more could you ask for than a room full of motivated developers with potential million dollar ideas? It would be as if Christmas came early!";

		return $section;
	}

	public function charity()
	{
		$section = "Hackathons are changing the world by inspiring technological innovation in young people. As technology plays a more integral role in our world, it becomes more and more important for companies to keep up with this change. Participating at this early stage by encouraging innovation will help make Google a prominent catalyst in this technological advancement.";

		return $section;
	}

	public function exposure()
	{
		$section = "The brightest high school minds in computer science in the Greater Philadelphia area will be at hackGFS. If Google donates to, or better yet sends a representative to attend hackGFS, students will be familiar with and remember you when they are looking to use a certain service or product while developing their skills in the future. Because of this exposure, we believe that sponsoring hackGFS now may result in huge benefits for Google down the road.";

		return $section;
	}
}
