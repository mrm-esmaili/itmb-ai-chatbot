# AI Usage Report

AI was used during the planning phase.

Activities assisted by AI:

* Requirement analysis
* Architecture review
* Laravel vs plain PHP evaluation
* Roadmap creation
* Documentation drafting
* Retrieval and memory design ideas

Final implementation decisions remain human-reviewed and manually selected.

## AI Usage Update (Development Start)

At this stage, AI was used to assist in:

- Translating architecture design into Laravel structure
- Suggesting service layer organization
- Confirming separation of concerns in PHP/Laravel
- Reviewing initial folder structure decisions

Human decisions:

- Final Laravel project initialization
- Directory structure selection
- Service-based architecture approach

## AI Usage Update - Retrieval Design

AI was used to assist in:

- Designing document-based retrieval strategy
- Suggesting simple keyword/similarity matching approaches for MVP
- Structuring RetrievalService in Laravel
- Improving separation between retrieval and AI generation layers

Human decisions:

- Choosing simple retrieval instead of embeddings (for MVP scope)
- Defining document structure (Markdown-based knowledge base)
- Selecting lightweight PHP-based implementation

## AI Usage Update - AI Integration Phase

AI was heavily used in this phase for:

- Designing prompt structure for consistent AI responses
- Structuring AI service abstraction layer
- Improving separation between retrieval and generation logic
- Suggesting best practices for prompt engineering
- Designing context injection strategy

Human decisions:

- Final selection of prompt format
- Choosing AI provider abstraction instead of direct coupling
- Defining response constraints (grounded answers only)
- Preventing over-reliance on AI hallucination (AI Temperature=0.2)

## AI Usage Update - Memory System

AI was used in this phase to:

- Design session-based memory structure
- Suggest approaches for conversation history storage
- Improve prompt integration with chat history
- Optimize balance between context window and memory size
- Explore limitations of stateless AI systems

Human decisions:

- Choosing simple session-based memory (instead of long-term DB memory)
- Limiting memory size for performance reasons
- Defining what part of history should be injected into prompt

## AI Usage Update - UI & Evaluation Phase

AI was used in this phase to:

- Design simple chat UI structure (Blade + Bootstrap)
- Suggest evaluation scenarios for system testing
- Improve user interaction flow
- Help structure end-to-end testing approach

Human decisions:

- Keeping UI minimal to focus on backend quality
- Defining evaluation scenarios manually based on business logic
- Ensuring UI does not introduce complexity into core architecture
- RTL, Logo, FontVair simple polish

## AI Usage Reflection

Throughout the project, AI was primarily used as:

- Planning assistant
- Architecture reviewer
- Documentation helper
- Implementation advisor

Key lesson:

AI accelerated development, but architectural decisions, trade-offs and scope management remained human responsibilities.

Examples of rejected AI suggestions:

- Early embedding integration
- Complex memory architecture
- Additional frontend frameworks

These ideas were intentionally postponed to keep the MVP focused and achievable within the project timeline.
